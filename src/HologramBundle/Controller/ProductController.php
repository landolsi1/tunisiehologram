<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace HologramBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HologramBundle\Entity\Product;
use HologramBundle\Entity\Upload;
use HologramBundle\Form\ProductForm;
use HologramBundle\Form\ValidateProductForm;
use HologramBundle\Form\EditProductForm;
use HologramBundle\Form\AddFinalVideoForm;

/**
 * Description of ProductController
 *
 * @author asus
 */
class ProductController extends Controller{
 

    //affichage de listes des produits validés backoffice
     public function viewValidateProductsAction() {
        $em=$this->getDoctrine()->getManager();
        $products=$em->getRepository('HologramBundle:Product')->findBy(array('etat'=>'valider'));
        return $this->render('HologramBundle:Back:produitsValides.html.twig'
                ,array('prod'=>$products));
    }
    
    //affichage  produits non valides dans back office
    public function affichageAction() {
        
      $em=$this->getDoctrine()->getManager();
      $products=$em->getRepository('HologramBundle:Product')->findBy(array('etat'=>'en attente'));
      return $this->render('HologramBundle:Back:produitsNonValides.html.twig',array('prod'=>$products));
    }
    
   
    //afficher un produit pour le valider dans Back-Office
     public function viewOneProductAction($id) {
      
       $em=$this->getDoctrine()->getManager();
       $product=$em->getRepository('HologramBundle:Product')->find($id);
       $videoPath = ('../web/Uploads/'.$product->getVideo());
       $imgPath = ('../web/Uploads/'.$product->getProductPhoto());
       $date=$product->getProductDate();
       $form=$this->createForm(new ValidateProductForm(),$product);
       $requete=$this->get('request');
       $form->handleRequest($requete);
     
        return $this->render('HologramBundle:Back:oneProductNotValidated.hml.twig',
                array('f'=>$form->createView(),'p'=>$product,'video'=>$videoPath,'img'=>$imgPath,"d"=>$date));
      }
      
      //refuser un produit back-office
       public function refuseProductAction($id){
        
        $em=$this->getDoctrine()->getManager();
        $product=$em->getRepository('HologramBundle:Product')->find($id);
        $em->remove($product);
        $em->flush();
        
         return $this->redirectToRoute('esprit_hologram');
      }
      
      
      //valider produit Back-Office
       public function validateProductAction($id){
        $em=$this->getDoctrine()->getManager();
        $product=$em->getRepository('HologramBundle:Product')->find($id);
        $product->setEtat("valider");
        $em->persist($product);
        $em->flush();
         return $this->redirectToRoute('esprit_hologram');
      }

      //affichage de listes de produit d'un client front office
     public function viewProductsAction() {
        $id = $this->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $products=$em->getRepository('HologramBundle:Product')->findBy(array('idUser'=>$id,'etat'=>array('en attente','valider')));
        return $this->render('HologramBundle:Front:allProducts.html.twig',
                array('prod'=>$products));  
    }
    
     //add new product front office
     public function addProductAction() {
        
        $em = $this->getDoctrine()->getManager();
        $product=new Product();
        $form=$this->createForm(new ProductForm(),$product);
        $request=$this->get('request');
        $form->handleRequest($request);
         if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $upload = new Upload("", "../web/Uploads/", 0, 0);
            $productVideo=$form->get('video')->getData();
            $file = array("tmp_name" => $productVideo->getPathname(),
                "type" => $productVideo->getMimeType()
            );
            
            $productPhoto=$form->get('productPhoto')->getData();
            $file1 = array("tmp_name" => $productPhoto->getPathname(),
                "type" => $productPhoto->getMimeType()
            );
           
            
            $product->setVideo($upload->uploadFile($file));
            $product->setProductPhoto($upload->uploadFile($file1));
            $product->setProductDate(new \DateTime('now'));
            $product->setIdUser($this->getUser());
            $em->persist($product);
            $em->flush();
            
        return $this->redirectToRoute('esprit_hologram_front_products');
        }
      
        return $this->render('HologramBundle:Front:newProduct.html.twig',array('f'=>$form->createView()));  
    }
    
    //affichage d'un produit front office
     public function viewProductAction($id) {
       $em=$this->getDoctrine()->getManager();
       $product=$em->getRepository('HologramBundle:Product')->find($id);
       return $this->render('HologramBundle:Front:oneProduct.html.twig',array('p'=>$product)); 
      }
      
      //modifier un produit front offcie
        public function editProductAction($id){
        
        $em=$this->getDoctrine()->getManager();
        $product=$em->getRepository('HologramBundle:Product')->find($id);
        $p=$product->getProductPhoto();
        $v=$product->getVideo();
        
      /*$form = $this->createFormBuilder($product)
        ->add('video','file', array('data_class' => null, 'required' => false,'attr' =>array('class'=>' form-control custom-file-input'),'label'=>'Update your video '))
       ->add('productPhoto','file', array('data_class' => null, 'required' => false,'attr' =>array('class'=>' form-control custom-file-input'),'label'=>'Update your logo '))
       ->getForm();
       */
      $request = $this->get('request');   
      if($request->getMethod()=='POST')
     { 
            $upload = new Upload("", "../web/Uploads/", 0, 0);
           
            $video=$this->getRequest()->files->get('file'); 
            $productPhoto = $this->getRequest()->files->get('upload2'); 
             
            if($productPhoto != null)
            { $file1 = array("tmp_name" => $productPhoto->getPathname(),
                "type" => $productPhoto->getMimeType()
            );
            $product->setProductPhoto($upload->uploadFile($file1));
            }else{
            $product->setProductPhoto($p);
            }
            
            //video
            
            
             if($video != null)
            { $file2 = array("tmp_name" => $video->getPathname(),
                "type" => $video->getMimeType()
            );
            $product->setVideo($upload->uploadFile($file2));
            }else{
                $product->setVideo($v);
            }
            
         
        $n=$request->get('nomp');
        $c=$request->get('contenup');
        if ($product->getEtat() ==  "valider"){
        $product->setEtat("en attente");
        }
        $product->setProductName($n);
        $product->setProductContent($c);
   
        $em->persist($product);
        $em->flush();
         return $this->redirectToRoute('esprit_hologram_front_products');
      

}
         return $this->render('HologramBundle:Front:oneProduct.html.twig',
                 array('p'=>$product,'id'=>$id));

      }
    
     
     //affichage d'un produit validé et ajouter vidéo final si le produit est payer 
     public function viewOneValidProductAction($id) {
      
       $em=$this->getDoctrine()->getManager();
       $product=$em->getRepository('HologramBundle:Product')->find($id);
       $videoPath = ('../web/Uploads/'.$product->getVideo());
       $finalVideoPath = ('../web/Uploads/'.$product->getFinalVideo());
       $imgPath = ('../web/Uploads/'.$product->getProductPhoto());
       $date=$product->getProductDate();
      
     
       if($product->getFinalVideo() != null)
       {
        $form=$this->createForm(new ValidateProductForm(),$product);
        $requete=$this->get('request');
        $form->handleRequest($requete);
        return $this->render('HologramBundle:Back:ViewValidateProd.html.twig',
                array('f'=>$form->createView(),'p'=>$product,'video'=>$videoPath,'img'=>$imgPath,"d"=>$date,"final"=>  $finalVideoPath));
      }else{
          
       /* $form1 = $this->createFormBuilder($product)
        ->add('finalVideo','file',array('data_class' => null,'attr' =>array('class'=>'form-control custom-file-input'),'label'=>' ')) 
        ->getForm();*/
    
     $request = $this->get('request'); 
           
     if($request->getMethod()=='POST')
    { 
         $data = $this->getRequest()->request->all();
         $file1 = $this->getRequest()->files->get('file'); 
         $upload = new Upload("", "../web/Uploads/", 0, 0);

            $file = array("tmp_name" => $file1->getPathname(),
                "type" => $file1->getMimeType()
            );
            
            $upload1 = new Upload("", "C:\\wamp\\www\\hologamme\\uploads\\", 0, 0);
            $product->setFinalVid($upload1->uploadFile($file));
            $product->setFinalVideo($upload->uploadFile($file));
            $em->persist($product);
            $em->flush();
            
        return $this->redirectToRoute('esprit_hologram_view_validate_products');  
    }  
      
      return $this->render('HologramBundle:Back:addFinalVideo.html.twig',
                array('p'=>$product,'video'=>$videoPath,'img'=>$imgPath,"d"=>$date,'id'=>$id));
      }
      
     }
    
     
     
     //affichage de listes des produits final (payés) d'un client front office
     public function viewFinalProductsAction() {
        $id = $this->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $products=$em->getRepository('HologramBundle:Product')->findBy(array('idUser'=>$id,'etat'=>'paye'));
        return $this->render('HologramBundle:Front:finalProducts.html.twig',
                array('prod'=>$products));  
    }
    
     
     //affichae détails d'un produit déja payé
      public function viewVideoAction($id) {
      
       $em=$this->getDoctrine()->getManager();
       $product=$em->getRepository('HologramBundle:Product')->find($id);
         return $this->render('HologramBundle:Front:finalVideo.html.twig',
                array('p'=>$product));
         
      }
     
}
