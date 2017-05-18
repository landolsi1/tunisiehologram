<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace HologramBundle\Entity;
/**
 * Description of spectators
 *
 * @author kissou
 */
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */

class Spectators {
    //put your code here
    
    
      /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
      /**
     * @ORM\Column(type="datetime")
     */
    private $date;
    
    /**
     * @ORM\Column(type="time", length=255)
     */
    private $timeBegin;
    
    /**
     * @ORM\Column(type="time", length=255)
     */
    private $timeEnd;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $number;
    
    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getTimeBegin() {
        return $this->timeBegin;
    }

    function getTimeEnd() {
        return $this->timeEnd;
    }

    function getNumber() {
        return $this->number;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setTimeBegin($timeBegin) {
        $this->timeBegin = $timeBegin;
    }

    function setTimeEnd($timeEnd) {
        $this->timeEnd = $timeEnd;
    }

    function setNumber($number) {
        $this->number = $number;
    }


    
    
}
