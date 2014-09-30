<?php
/**
 * EntityCollection.php
 * User: Julien
 * Date: 27/09/14
 * Time: 20:20
 */

namespace JulienVinber\QobuzApiPhp\Entity\Base;


abstract class QobuzEntityRepository
{
    protected $listeEntity;

    const GLOBALBASENAME = 'JulienVinberQobuzEntityBaseQobuzEntityRepository_';

    function __construct()
    {
        $this->listeEntity = array();
    }

    public function add(QobuzEntity $entity)
    {
        if (! $this->isEntityType($entity)){
            $className = get_called_class();
            throw new \Exception('Incompatible type : entity must be a '.$className);
        } else{
            $this->listeEntity[] = $entity;
        }
        return $entity;
    }

    static public function getInstance()
    {
        $className = get_called_class();
        $globalName = self::GLOBALBASENAME.$className;
        if (! isset($GLOBALS[$globalName])) {
            $GLOBALS[$globalName] = new $className();
        }
        return $GLOBALS[$globalName];
    }

    static public function getById($id)
    {
        $instance = self::getInstance();
        foreach ($instance->listeEntity as $entity) {
            if ($entity->is($id)){
                return $entity;
            }
        }
        return null;
    }

    static public function getOrCreate($jsonObject)
    {
        $entity = null;
        $instance = self::getInstance();
        if($jsonObject->id){
            $entity = $instance->getById($jsonObject->id);
            if (!is_null($entity)){
                $className = self::getEntityName();
                $entity = new $className($jsonObject);
            }
            $instance->add($entity);
            return $entity;
        }
        return null;
    }

    static public function isEntityType($entity)
    {
        return is_a($entity, self::getEntityName());
    }

    abstract public function getEntityName();
} 