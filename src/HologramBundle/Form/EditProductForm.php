<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EditProduct
 *
 * @author asus
 */

namespace HologramBundle\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;


class EditProductForm extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
       $builder
       ->add('productName','text',array('attr' =>array('class'=>'form-control ')) )
       ->add('productContent','textarea',array('attr' =>array('class'=>' form-control')))
      // ->add('video','file',array('attr' =>array('class'=>'item form-group form-control')))
       //->add('productPhoto','file',array('attr' =>array('class'=>'item form-group form-control')))
       //->add('Update','submit',array('attr' =>array('class'=>'btn btn-success')))
      ;
      
       
    }
    
    
    public function getName() {
     
        return "product";
    }
}

