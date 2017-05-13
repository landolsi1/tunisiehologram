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
use HologramBundle\Entity\Payment;
use HologramBundle\Form\PaymentForm;
use HologramBundle\Form\ProductForm;
use HologramBundle\Form\ValidateProductForm;
use HologramBundle\Form\EditProductForm;

/**
 * Description of ProductController
 *
 * @author asus
 */
class ProductController extends Controller{
 
    
    public function viewProductsAction() {
         
        $em=$this->getDoctrine()->getManager();
        $products=$em->getRepository('HologramBundle:Product')->findAll(); 
        //$imgPath = ('../web/Uploads/'.$products->getProductPhoto());
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
       
            //$upload = new Upload("", "C:\\wamp\\www\\tizen\\images\\", 0, 0);
            
            $upload = new Upload("", "../web/Uploads/", 0, 0);
            $productVideo=$form->get('video')->getData();
            $file = array("tmp_name" => $productVideo->getPathname(),
                "type" => $productVideo->getMimeType()
            );
            
            $productPhoto=$form->get('productPhoto')->getData();
            $file1 = array("tmp_name" => $productPhoto->getPathname(),
                "type" => $productPhoto->getMimeType()
            );
            //$product->setProductPhoto($productPhoto);
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
    
    
    
    
   public function productswaitingAction(){
         $em=$this->getDoctrine()->getManager();
        $products=$em->getRepository('HologramBundle:Product')->findBy(array('etat'=>'waiting')) ;
        //$imgPath = ('../web/Uploads/'.$products->getProductPhoto());
        return $this->render('HologramBundle:Front:productWaitingLaunch.html.twig',
                array('prod'=>$products));  
       
       
       
   }
   
   
   public function refuseProductAction($id){
        
        $em=$this->getDoctrine()->getManager();
        $product=$em->getRepository('HologramBundle:Product')->find($id);
        $em->remove($product);
        $em->flush();
        
         return $this->redirectToRoute('esprit_hologram_front_products_waiting');
      }

       public function validateProductAction($id){
        
        $em=$this->getDoctrine()->getManager();
        $product=$em->getRepository('HologramBundle:Product')->find($id);
        $product->setEtat("valider");
        $em->persist($product);
        $em->flush();
        
         return $this->redirectToRoute('esprit_hologram_front_products_waiting');
      }
      
      public function myProductsAction(){
          $user = $this->container->get('security.context')->getToken()->getUser();
        $author_id = $user->getId();
           $em=$this->getDoctrine()->getManager();
        $products=$em->getRepository('HologramBundle:Product')->findBy(array('iduser'=>$author_id)) ;
        //$imgPath = ('../web/Uploads/'.$products->getProductPhoto());
        return $this->render('HologramBundle:Front:myProducts.html.twig',
                array('prod'=>$products));  
          
      }

}
