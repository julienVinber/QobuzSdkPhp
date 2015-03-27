<?php
/**
 * Browser.php
 * User: julien.vinber
 * Date: 27/03/2015
 * Time: 19:28
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;

class Browser extends QobuzEntity
{
    protected $userAgent;
    protected $browserName;
    protected $browserVersion;
    protected $osName;
    protected $platform;
    protected $cookieEnabled;
    protected $language;
    protected $touchDevice;
    protected $applicationCache;
    protected $localStorage;
    protected $context;
    protected $remoteAddr;

    protected function initValeur($jsonObject)
    {
        $this->setUneValeurSimple($jsonObject, 'userAgent');
        $this->setUneValeurSimple($jsonObject, 'browserName');
        $this->setUneValeurSimple($jsonObject, 'browserVersion');
        $this->setUneValeurSimple($jsonObject, 'osName');
        $this->setUneValeurSimple($jsonObject, 'platform');
        $this->setUneValeurSimple($jsonObject, 'cookieEnabled');
        $this->setUneValeurSimple($jsonObject, 'language');
        $this->setUneValeurSimple($jsonObject, 'touchDevice');
        $this->setUneValeurSimple($jsonObject, 'applicationCache');
        $this->setUneValeurSimple($jsonObject, 'localStorage');
        $this->setUneValeurSimple($jsonObject, 'context');
        $this->setUneValeurSimple($jsonObject, 'remoteAddr');
    }
}