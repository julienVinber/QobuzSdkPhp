<?php
/**
 * Lastfm.php
 * User: julien.vinber
 * Date: 27/03/2015
 * Time: 20:15
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;


class Lastfm extends QobuzEntity
{
    protected $name;
    protected $key;

    protected function initValeur($jsonObject)
    {
        $this->setUneValeurSimple($jsonObject, 'name');
        $this->setUneValeurSimple($jsonObject, 'key');
    }
}