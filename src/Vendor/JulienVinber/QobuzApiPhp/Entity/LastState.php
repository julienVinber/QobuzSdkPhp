<?php
/**
 * LastState.php
 * User: julien.vinber
 * Date: 27/03/2015
 * Time: 19:39
 */

namespace JulienVinber\QobuzApiPhp\Entity;


use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;

class LastState extends QobuzEntity
{
    protected $datetime;
    protected $page;
    protected $track;

    protected function initValeur($jsonObject)
    {
        $this->setUneValeurSimple($jsonObject, 'datetime');
        $this->setUneValeurArray($jsonObject, 'page');
        $this->setUneValeurObjet($jsonObject, 'browser', 'JulienVinber\QobuzApiPhp\Entity\Track');
    }
}