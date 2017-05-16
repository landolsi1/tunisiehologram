<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace HologramBundle\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;


/**
 * Description of AddFinalVideo
 *
 * @author asus
 */
class AddFinalVideoForm  extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
       
      $builder
      ->add('finalVideo','file', array('data_class' => null, 'required' => false,'attr' =>array('class'=>' form-control custom-file-input'),'label'=>' '));
 }
    
    
    public function getName() {
     
        return "product";
    }
}