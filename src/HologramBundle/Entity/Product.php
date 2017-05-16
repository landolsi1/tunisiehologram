<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author Rami
 */
namespace HologramBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * @ORM\Entity
 */

class Product {
   
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $idProduit;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $productName;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $productContent;
    /**
     * @ORM\Column(type="datetime")
     */
    private $productDate = null;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etat = 'en attente';
    /**
     * @ORM\Column(type="string", length=255)
     * @@Assert\File(maxSize="2147483648")
     * mimeTypesMessage = "Please upload a valid Video"
     */
    private $video;
   
    /**
     * @ORM\Column(type="string", length=255)
     * @@Assert\File(maxSize="2147483648")
     * mimeTypesMessage = "Please upload a valid Photo"
     */
    private $productPhoto;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="HologramBundle\Entity\User")
     */
    private $idUser;
    
    /**
     * @ORM\Column(type="string", length=255,  nullable=true))
     * @@Assert\File(maxSize="2147483648")
     */
    private $finalVideo = null;
    
    /**
     * @ORM\Column(type="string", length=255,  nullable=true))
     * @@Assert\File(maxSize="2147483648")
     */
    private $finalVid = null;

    
    function getIdProduit() {
        return $this->idProduit;
    }

    function getProductName() {
        return $this->productName;
    }

    function getProductContent() {
        return $this->productContent;
    }

    function getProductDate() {
        return $this->productDate;
    }

    function setIdProduit($idProduit) {
        $this->idProduit = $idProduit;
    }

    function setProductName($productName) {
        $this->productName = $productName;
    }

    function setProductContent($productContent) {
        $this->productContent = $productContent;
    }

    function setProductDate($productDate) {
        $this->productDate = $productDate;
    }
    
    function getVideo() {
        return $this->video;
    }

    function setVideo($video) {
        $this->video = $video;
    }

    function getEtat() {
        return $this->etat;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }
    
    function getProductPhoto() {
        return $this->productPhoto;
    }

    function setProductPhoto($productPhoto) {
        $this->productPhoto = $productPhoto;
    }

    function getIdUser() {
        return $this->idUser;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function getFinalVideo() {
        return $this->finalVideo;
    }

    function setFinalVideo($finalVideo) {
        $this->finalVideo = $finalVideo;
    }

    function getFinalVid() {
        return $this->finalVid;
    }

    function setFinalVid($finalVid) {
        $this->finalVid = $finalVid;
    }



}
