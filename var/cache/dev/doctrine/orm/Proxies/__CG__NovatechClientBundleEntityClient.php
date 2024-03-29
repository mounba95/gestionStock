<?php

namespace Proxies\__CG__\Novatech\ClientBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Client extends \Novatech\ClientBundle\Entity\Client implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'id', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'nomClient', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'referenceClient', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'adresseClient', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'numeroClient', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'etatClient', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'emailClient', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'facture'];
        }

        return ['__isInitialized__', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'id', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'nomClient', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'referenceClient', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'adresseClient', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'numeroClient', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'etatClient', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'emailClient', '' . "\0" . 'Novatech\\ClientBundle\\Entity\\Client' . "\0" . 'facture'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Client $proxy) {
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomClient($nomClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomClient', [$nomClient]);

        return parent::setNomClient($nomClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomClient', []);

        return parent::getNomClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setReferenceClient($referenceClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReferenceClient', [$referenceClient]);

        return parent::setReferenceClient($referenceClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getReferenceClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReferenceClient', []);

        return parent::getReferenceClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseClient($adresseClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseClient', [$adresseClient]);

        return parent::setAdresseClient($adresseClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseClient', []);

        return parent::getAdresseClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroClient($numeroClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroClient', [$numeroClient]);

        return parent::setNumeroClient($numeroClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroClient', []);

        return parent::getNumeroClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatClient($etatClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatClient', [$etatClient]);

        return parent::setEtatClient($etatClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatClient', []);

        return parent::getEtatClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailClient($emailClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailClient', [$emailClient]);

        return parent::setEmailClient($emailClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailClient', []);

        return parent::getEmailClient();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
