<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace HologramBundle\Controller;
/**
 * Description of StatistiqueController
 *
 * @author kissou
 */
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;

class StatistiqueController extends Controller{
    //put your code here
    
    public function statAction($id){
        
        $Payment = $this->getDoctrine()->getRepository('HologramBundle:Payment')->findById($id);
        $hF= $Payment[0]->getHeureFin();
        $HD= $Payment[0]->getHeureDeb();
        $dd= $Payment[0]->getDateDeb();
          $ndd=$dd->format('Y-m-d');
          var_dump($Payment);
        $Produit = $this->getDoctrine()->getRepository('HologramBundle:Product')->findByIdProduit($id);
                  var_dump($Produit);

         $productName = $Produit[0]->getProductName();
        $em = $this->getDoctrine()->getManager();
        
        
                $connection = $em->getConnection();
                $statement = $connection->prepare("
                select `number`
                from `spectators`
                where`timeBegin`  >= :timeb 
                   AND `timeEnd` <= :timeend
                   AND `date` = :date
                ");

                $statement->bindValue('timeb', $HD);
                $statement->bindValue('timeend', $hF);
                $statement->bindValue('date', $ndd);
                $statement->execute();
                $results = $statement->fetchAll();
                
                $array = array(); 
          var_dump($results);
                foreach ($results as $key => $value)
                          array_push($array,(int)$value['number']);
               // $values = array_values($results);
                 //         var_dump(array_values($results));

                var_dump($array);
        $series = array(
                    array("name" => "pub-clients",    "data" => $array)
                );

                $ob = new Highchart();
                $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
                $ob->title->text($productName);
                $ob->xAxis->title(array('text'  => "time"));
                $ob->yAxis->title(array('text'  => "Clients"));
                $ob->series($series);

        return $this->render('HologramBundle:Front:statProduct.html.twig', array(
                    'chart' => $ob
                ));  
      
    }
    
                public function chartAction()
            {
                // Chart
                $series = array(
                    array("name" => "Data Serie Name",    "data" => array(1,2,4,5,6,3,8))
                );

                $ob = new Highchart();
                $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
                $ob->title->text('Chart Title');
                $ob->xAxis->title(array('text'  => "Horizontal axis title"));
                $ob->yAxis->title(array('text'  => "Vertical axis title"));
                $ob->series($series);

                return $this->render('::your_template.html.twig', array(
                    'chart' => $ob
                ));
            }


    
}
