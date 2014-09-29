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

    const GLOBALBASENAME = 'JulienVinberQobuzEntityBaseQobuzEntityCollection_';

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

    static public function get($id)
    {
        $instance = self::getInstance();
        foreach ($instance->listeEntity as $entity) {
            if ($entity->is($id)){
                return $entity;
            }
        }
    }

    abstract public function isEntityType($entity);
} 