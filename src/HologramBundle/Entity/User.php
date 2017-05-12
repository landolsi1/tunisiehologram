<?php

/**
 * Description of User
 *
 * @author Rami
 */
namespace HologramBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser; 
use Doctrine\ORM\Mapping as ORM;  
/**  
 * @ORM\Entity  
 * @ORM\Table(name="user") 
 */ 
class User extends BaseUser {     
    /**      
     * @ORM\Id      
     * @ORM\Column(type="integer")      
     * @ORM\GeneratedValue(strategy="AUTO")      
     */     
    protected $id;  
    /**
     * 
     * * @ORM\OneToMany(targetEntity="Product", mappedBy="iduser")
     */
    private $products;
  
   
 
 
    
 
    
    
    
    public function __construct()     
    {         
        parent::__construct();  
        // your own logic    
    } 
    
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }
       public function getParent() {
        return 'fos_user_profile';
    }
    
}
