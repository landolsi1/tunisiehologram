<?php

namespace HologramBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment", indexes={@ORM\Index(name="idproduct", columns={"idproduct", "iduser"})})
 * @ORM\Entity
 */
class Payment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idproduct", type="integer", nullable=false)
     */
    private $idproduct;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=false)
     */
    private $total;
     /**
     * @var string
     *
     * @ORM\Column(name="ccv", type="integer")
     */
    private $ccv;
     /**
     * @var string
     *
     * @ORM\Column(name="ExpirationDate", type="date")
     */
    private $ExpirationDate;
    /**
     * @var float
     *
     * @ORM\Column(name="cardnumber", type="integer")
     */
    private $cardnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="verification", type="string", length=65535, nullable=false)
     */
    private $verification;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idproduct
     *
     * @param integer $idproduct
     *
     * @return Payment
     */
    public function setIdproduct($idproduct)
    {
        $this->idproduct = $idproduct;

        return $this;
    }

    /**
     * Get idproduct
     *
     * @return integer
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     *
     * @return Payment
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Payment
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Payment
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set verification
     *
     * @param string $verification
     *
     * @return Payment
     */
    public function setVerification($verification)
    {
        $this->verification = $verification;

        return $this;
    }

    /**
     * Get verification
     *
     * @return string
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    
    
    function getCcv() {
        return $this->ccv;
    }

    function getExpirationDate() {
        return $this->ExpirationDate;
    }

    function setExpirationDate($ExpirationDate) {
        $this->ExpirationDate = $ExpirationDate;
    }

    
    function getCardnumber() {
        return $this->cardnumber;
    }

    function setCcv($ccv) {
        $this->ccv = $ccv;
    }

   

    function setCardnumber($cardnumber) {
        $this->cardnumber = $cardnumber;
    }


}
