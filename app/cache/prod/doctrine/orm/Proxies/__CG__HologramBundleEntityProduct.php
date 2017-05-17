<?php

namespace Proxies\__CG__\HologramBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \HologramBundle\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'idProduit', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'productName', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'productContent', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'productDate', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'etat', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'video', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'productPhoto', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'idUser', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'finalVideo', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'finalVid'];
        }

        return ['__isInitialized__', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'idProduit', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'productName', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'productContent', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'productDate', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'etat', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'video', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'productPhoto', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'idUser', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'finalVideo', '' . "\0" . 'HologramBundle\\Entity\\Product' . "\0" . 'finalVid'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Product $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdProduit()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdProduit();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProduit', []);

        return parent::getIdProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function getProductName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductName', []);

        return parent::getProductName();
    }

    /**
     * {@inheritDoc}
     */
    public function getProductContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductContent', []);

        return parent::getProductContent();
    }

    /**
     * {@inheritDoc}
     */
    public function getProductDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductDate', []);

        return parent::getProductDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdProduit($idProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdProduit', [$idProduit]);

        return parent::setIdProduit($idProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function setProductName($productName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductName', [$productName]);

        return parent::setProductName($productName);
    }

    /**
     * {@inheritDoc}
     */
    public function setProductContent($productContent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductContent', [$productContent]);

        return parent::setProductContent($productContent);
    }

    /**
     * {@inheritDoc}
     */
    public function setProductDate($productDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductDate', [$productDate]);

        return parent::setProductDate($productDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideo', []);

        return parent::getVideo();
    }

    /**
     * {@inheritDoc}
     */
    public function setVideo($video)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVideo', [$video]);

        return parent::setVideo($video);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductPhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductPhoto', []);

        return parent::getProductPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductPhoto($productPhoto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductPhoto', [$productPhoto]);

        return parent::setProductPhoto($productPhoto);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUser', []);

        return parent::getIdUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUser($idUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUser', [$idUser]);

        return parent::setIdUser($idUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinalVideo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinalVideo', []);

        return parent::getFinalVideo();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinalVideo($finalVideo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinalVideo', [$finalVideo]);

        return parent::setFinalVideo($finalVideo);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinalVid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinalVid', []);

        return parent::getFinalVid();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinalVid($finalVid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinalVid', [$finalVid]);

        return parent::setFinalVid($finalVid);
    }

}