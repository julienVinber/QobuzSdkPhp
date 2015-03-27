<?php
/**
 * CredentialParameters.php
 * User: julien.vinber
 * Date: 27/03/2015
 * Time: 20:04
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;


class CredentialParameters extends QobuzEntity
{
    protected $lossy_streaming;
    protected $lossless_streaming;
    protected $mobile_streaming;
    protected $offline_streaming;
    protected $included_format_group_ids;
    protected $included_label_ids;
    protected $included_supplier_ids;
    protected $color_scheme;
    protected $label;
    protected $shortLabel;

    protected function initValeur($jsonObject)
    {
        $this->setUneValeurSimple($jsonObject, 'lossy_streaming');
        $this->setUneValeurSimple($jsonObject, 'lossless_streaming');
        $this->setUneValeurSimple($jsonObject, 'mobile_streaming');
        $this->setUneValeurSimple($jsonObject, 'offline_streaming');
        $this->setUneValeurArray($jsonObject, 'included_format_group_ids');
        $this->setUneValeurArray($jsonObject, 'included_label_ids');
        $this->setUneValeurArray($jsonObject, 'included_supplier_ids');
        $this->setUneValeurObjet($jsonObject, 'color_scheme', 'JulienVinber\QobuzApiPhp\Entity\ColorScheme');
        $this->setUneValeurSimple($jsonObject, 'label');
        $this->setUneValeurSimple($jsonObject, 'shortLabel');
    }
}