<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidateProductForm
 *
 * @author asus
 */

namespace HologramBundle\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;


class ValidateProductForm extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
       $builder
       ->add('productName','text',array('attr' =>array('class'=>'form-control col-md-7 col-xs-12'),'read_only' =>'true'))
       ->add('productContent','textarea',array('attr' =>array('class'=>'item form-group form-control'),'read_only' =>'true'))
       //->add('productDate','date',array('attr' =>array('class'=>'item form-group form-control','format'=>'yyyy-MM-dd'),'read_only' =>'true'))

//->add('Validate','submit',array('attr' =>array('class'=>'btn btn-success')))
        ;

      
       
    }
    
    
    public function getName() {
     
        return "product";
    }
}
