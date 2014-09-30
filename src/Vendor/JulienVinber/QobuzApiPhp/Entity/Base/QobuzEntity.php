<?php
/**
 * QobuzEntity.php
 * User: Julien
 * Date: 27/09/14
 * Time: 19:26
 */

namespace JulienVinber\QobuzApiPhp\Entity\Base;


abstract Class QobuzEntity
{
    protected $recupComplete = false;

    public function __construct($json = null)
    {
        if (is_null($json)) {
            $this->parsJson($json);
        }
    }

    protected function parsJson($json)
    {
        $value = json_decode($json);
        $this->initValeur($value);
    }

    protected function isRecupComplete()
    {
        return $this->recupComplete;
    }

    protected function getProperty($propertyName)
    {
        if (!isset($this->$propertyName)){
            $className = get_called_class();
            throw new \Exception('Property '.$propertyName.' not exist in '.$className);
            return false;
        }
        if (!is_null($this->$propertyName)){
            return $this->$propertyName;
        }
        if (!$this->isRecupComplete()){
            $this->getComplet();
        }
        return $this->$propertyName;
    }

    abstract protected function initValeur($jsonObject);
    abstract protected function getComplet();
} 