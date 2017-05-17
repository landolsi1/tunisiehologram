<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductForm
 *
 * @author asus
 */

namespace HologramBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;


class ProductForm  extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
       $builder
       ->add('productName','text',array('attr' =>array('class'=>'form-control col-md-7 col-xs-12','required'=>TRUE)) )
       ->add('productContent','textarea',array('attr' =>array('class'=>'item form-group form-control')))
       ->add('company','text',array('attr' =>array('class'=>'item form-group form-control')))
       ->add('video','file',array('attr' =>array('class'=>'item form-group form-control','required'=>TRUE)))
       ->add('productPhoto','file',array('attr' =>array('class'=>'item form-group form-control','required'=>TRUE)))
  /*  ->add('classeProduct', 'choice', array(
    'choices'   => array('a' => 'From 08:00 - 12:00 15$/Publicity ', 'b' => 'From 12:00 - 14:00 35$/Publicity ', 'c' => 'From 14:00 - 16:00 15$/Publicity', 'd' => 'From 16:00 - 17:30 25$/Publicity', 'e' => 'From 17:30 - 20:30 45$/Publicity ', 'f' => 'From 20:30 - 22:00 15$/Publicity '),
    'required'  => true,))*/
    ->add('Add','submit',array('attr' =>array('class'=>'btn btn-success')))
;

      
       
    }
    
    
    public function getName() {
     
        return "product";
    }
}
