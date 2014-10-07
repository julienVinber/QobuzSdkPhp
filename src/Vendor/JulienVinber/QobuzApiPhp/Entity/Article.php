<?php
/**
 * Article.php
 * User: Julien
 * Date: 27/09/14
 * Time: 19:04
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;
use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntitySearchItem;
use JulienVinber\QobuzApiPhp\Entity\Sub\Image;


class Article extends QobuzEntity implements QobuzEntitySearchItem
{
    protected $id = null;
    protected $title = null;
    protected $description = null;
    protected $published_at = null;
    protected $abstract = null;
    protected $content = null;
    protected $url = null;
    protected $author = null;
    protected $source = null;
    protected $category = null;
    protected $image = null;

    protected function initValeur($jsonObject)
    {
        if ($jsonObject->id) {
            $this->id = $jsonObject->id;
        }
        if ($jsonObject->title) {
            $this->title = $jsonObject->title;
        }
        if ($jsonObject->description) {
            $this->description = $jsonObject->description;
        }
        if ($jsonObject->published_at) {
            $this->published_at = $jsonObject->published_at;
        }
        if ($jsonObject->abstract) {
            $this->abstract = $jsonObject->abstract;
        }
        if ($jsonObject->content) {
            $this->content = $jsonObject->content;
        }
        if ($jsonObject->url) {
            $this->url = $jsonObject->url;
        }
        if ($jsonObject->author) {
            $this->author = $jsonObject->author;
        }
        if ($jsonObject->source) {
            $this->source = $jsonObject->source;
        }
        if ($jsonObject->category) {
            $this->category = $jsonObject->category;
        }
        if ($jsonObject->image) {
            $this->image = new Image($jsonObject->image);
        }
    }

    /**
     * @return null
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * @return null
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return null
     */
    public function getDescription()
    {
        return $this->description;
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
    public function getPublishedAt()
    {
        return $this->published_at;
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
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @return null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return null
     */
    public function getUrl()
    {
        return $this->url;
    }

    protected function getComplet()
    {
        // TODO: Implement getComplet() method.
    }
}