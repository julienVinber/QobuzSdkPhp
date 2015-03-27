<?php
/**
 * Facebook.php
 * User: julien.vinber
 * Date: 27/03/2015
 * Time: 20:15
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;


class Facebook extends QobuzEntity
{
    protected $id;
    protected $access_token;

    protected function initValeur($jsonObject)
    {
        $this->setUneValeurSimple($jsonObject, 'id');
        $this->setUneValeurSimple($jsonObject, 'access_token');
    }

} 