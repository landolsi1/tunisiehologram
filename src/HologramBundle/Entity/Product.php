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
       *@ORM\ManyToOne(targetEntity="User", inversedBy="products")
     * @ORM\JoinColumn(name="iduser", referencedColumnName="id")
       * * @ORM\Column(type="integer")
     */
    private $iduser;
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
    private $etat = 'waiting';
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $classeProduct;
    /**
     * @ORM\Column(type="string", length=255)
     * @@Assert\File(maxSize="2147483648")
     */
    private $video;
   
    /**
     * @ORM\Column(type="string", length=255)
     * @@Assert\File(maxSize="2147483648")
     */
    private $productPhoto;
    
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
    function getIduser() {
        return $this->iduser;
    }

    function setIduser($iduser) {
        $this->iduser = $iduser;
    }
    function getClasseProduct() {
        return $this->classeProduct;
    }

    function setClasseProduct($classeProduct) {
        $this->classeProduct = $classeProduct;
    }


}
