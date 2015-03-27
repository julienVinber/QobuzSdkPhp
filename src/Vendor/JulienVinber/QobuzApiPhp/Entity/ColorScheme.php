<?php
/**
 * ColorScheme.php
 * User: julien.vinber
 * Date: 27/03/2015
 * Time: 20:08
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;

class ColorScheme extends QobuzEntity
{
    protected $logo;

    protected function initValeur($jsonObject)
    {
        $this->setUneValeurSimple($jsonObject, 'logo');
    }
}