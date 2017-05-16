<?php

namespace HologramBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HologramBundle\Entity\Product;
use HologramBundle\Entity\Upload;
use HologramBundle\Entity\Payment;
use HologramBundle\Form\PaymentForm;
use HologramBundle\Form\ProductForm;
use HologramBundle\Form\ValidateProductForm;
use HologramBundle\Form\EditProductForm;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HologramBundle::Verification.html.twig');
    }
      public function indexxAction()
    {
        return $this->render('HologramBundle::Verification.html.twig');
    }
    public function registerRedirectAction()
    {
        return $this->render('FOSUserBundle::register.html.twig');
    }

 
     public function profileRedirectAction()
    {
        return $this->render('FOSUserBundle::edit.html.twig');
    }
    
    public function  paiementAction($id){
        
      $em = $this->getDoctrine()->getManager();
       $product=$em->getRepository('HologramBundle:Product')->find($id);
       $product->setEtat("paye");
       
       
       $paiement=new Payment();
       $form=$this->createForm(new PaymentForm(),$paiement);
        $request=$this->get('request');
        $form->handleRequest($request);
         if($form->isValid())
        {

            $em->persist($product);
            $paiement->setIduser($this->getUser()->getId());
            $paiement->setIdproduct($id);
            $p = $form->get('idproduct')->getData();
            if($p == "a"){
                $paiement->setPrix(15);
            } else if ($p == "b")  {
                $paiement->setPrix(35);
            } else if ($p == "c")  {
                $paiement->setPrix(15);
            } else if ($p == "d")  {
                $paiement->setPrix(25);
            } else if ($p == "e")  {
                $paiement->setPrix(45);
            } else if ($p == "f")  {
                $paiement->setPrix(15);
            } 
            $em->persist($paiement);
            $em->flush();
      
            return $this->redirectToRoute('esprit_hologram_front_products');
        }
      
 
        return $this->render('HologramBundle:Front:Payement.html.twig',array('f'=>$form->createView()));
    }

    
    


    /*public function viewProductsAction() {
         
        $em=$this->getDoctrine()->getManager();
        $products=$em->getRepository('HologramBundle:Product')->findAll(); 
        //$imgPath = ('../web/Uploads/'.$products->getProductPhoto());
        return $this->render('HologramBundle:Front:allProducts.html.twig',
                array('prod'=>$products));  
    }
    
    public function addProductAction() {
        
       $em = $this->getDoctrine()->getManager();
   
        $user = $this->container->get('security.context')->getToken()->getUser();
        $author_id = $user->getId();
       $product=new Product();
       $form=$this->createForm(new ProductForm(),$product);
        $request=$this->get('request');
        $form->handleRequest($request);
          $payment=new Payment();
       $formm=$this->createForm(new PaymentForm(),$payment);
        $request=$this->get('request');
        $formm->handleRequest($request);
 
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
            $product->setIduser($author_id);        
            $payment->setIdproduct($product->getIdProduit());
           // $em->persist($payment);
            $em->persist($product);
            $em->flush();
            
        return $this->redirectToRoute('esprit_hologram_front_products');
        }
      
        return $this->render('HologramBundle:Front:newProduct.html.twig',array('f'=>$form->createView(),'ff'=>$formm->createView()));  
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
    */
    
}
