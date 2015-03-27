<?php
/**
 * Externals.php
 * User: julien.vinber
 * Date: 27/03/2015
 * Time: 20:13
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;

class Externals extends QobuzEntity
{
    protected $lastfm;
    protected $facebook;

    protected function initValeur($jsonObject)
    {
        $this->setUneValeurObjet($jsonObject, 'browser', 'JulienVinber\QobuzApiPhp\Entity\Lastfm');
        $this->setUneValeurObjet($jsonObject, 'browser', 'JulienVinber\QobuzApiPhp\Entity\Facebook');
    }
}