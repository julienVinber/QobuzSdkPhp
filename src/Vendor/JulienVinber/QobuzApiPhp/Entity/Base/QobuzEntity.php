<?php
/**
 * QobuzEntity.php
 * User: Julien
 * Date: 27/09/14
 * Time: 19:26
 */

namespace JulienVinber\QobuzApiPhp\Entity\Base;


use JulienVinber\QobuzApiPhp\Entity\QobuzClient;

abstract Class QobuzEntity
{
    protected $qobuzClient;
    protected $recupComplete = false;

    public function __construct(QobuzClient $qobuzClient, $value = null)
    {
        $this->qobuzClient = $qobuzClient;
        if (!is_null($value)) {
            $this->initValeur($value);
        }
    }
    public function getValue($url, $paramGet)
    {
        $retour = $this->qobuzClient->getValue($url, $paramGet);
        $this->initValeur($retour);
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