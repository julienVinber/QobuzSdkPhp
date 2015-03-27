<?php
/**
 * Credential.php
 * User: julien.vinber
 * Date: 27/03/2015
 * Time: 20:01
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;


class Credential extends QobuzEntity
{
    protected $id;
    protected $label;
    protected $description;
    protected $parameters;

    protected function initValeur($jsonObject)
    {
        $this->setUneValeurSimple($jsonObject, 'id');
        $this->setUneValeurSimple($jsonObject, 'label');
        $this->setUneValeurSimple($jsonObject, 'description');
        $this->setUneValeurObjet($jsonObject, 'parameters', 'JulienVinber\QobuzApiPhp\Entity\CredentialParameters');
    }
}