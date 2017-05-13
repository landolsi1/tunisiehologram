<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace HologramBundle\Controller;

use Memeoirs\PaymillBundle\Controller\PaymillController;
use HologramBundle\Entity\Order;
class OrdersController extends PaymillController
{
    public function checkoutAction ()
    {
        $em = $this->getDoctrine()->getManager();

        // In a real world app, instead of instantiating an Order, you will
        // probably retrieve it from the database
        $order = new Order;
        $order->setAmount(50);
        $order->setCurrency('EUR');

        $form = $this->getPaymillForm($order->getAmount(), $order->getCurrency());

        return $this->render('HologramBundle::checkout.html.twig', array(
            'form'  => $form->createView(),
            'order' => $order,
        ));
    }
    
    
}