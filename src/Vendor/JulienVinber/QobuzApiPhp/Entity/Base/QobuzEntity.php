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
    public function __construct($json = null)
    {
        if (is_null($json)) {
            $this->parsJson($json);
        }
    }

    abstract protected function getRequestBase();

    abstract protected function parsJson($json);
} 