<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace HologramBundle\Form;

/**
 * Description of PaymentForm
 *
 * @author Rami
 */


use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;


class PaymentForm  extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
       $builder
       ->add('CardNumber','text',array('attr' =>array('class'=>'form-control col-md-7 col-xs-12')) )
       ->add('ExpirationDate','textarea',array('attr' =>array('class'=>'item form-group form-control')))
       ->add('CCV','text',array('attr' =>array('class'=>'item form-group form-control')))
        
      ;
      
       
    }
    
    
    public function getName() {
     
        return "payment";
    }
}
