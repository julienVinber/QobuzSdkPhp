<?php
/**
 * Artist.php
 * User: Julien
 * Date: 27/09/14
 * Time: 18:51
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;
use JulienVinber\QobuzApiPhp\Entity\Sub\Biography;
use JulienVinber\QobuzApiPhp\Entity\Sub\Image;


class Artist extends QobuzEntity {
    protected $id = null;
    protected $name = null;
    protected $slug = null;
    protected $image = null;
    protected $biography = null;

    protected function initValeur($jsonObject)
    {
        if ($jsonObject->id) {
            $this->id = $jsonObject->id;
        }
        if ($jsonObject->name) {
            $this->name = $jsonObject->name;
        }
        if ($jsonObject->slug) {
            $this->slug = $jsonObject->slug;
        }
        if ($jsonObject->image) {
            $this->image = new Image($jsonObject->image);
        }
        if ($jsonObject->biography) {
            $this->biography = new Biography($jsonObject->biography);
        }
    }

    /**
     * @return null
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return boolean
     */
    public function getRecupComplete()
    {
        return $this->recupComplete;
    }

    /**
     * @return null
     */
    public function getSlug()
    {
        return $this->slug;
    }

    protected function getComplet()
    {
        // TODO: Implement getComplet() method.
    }
}