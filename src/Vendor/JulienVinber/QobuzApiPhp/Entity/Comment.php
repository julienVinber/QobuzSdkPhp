<?php
/**
 * Comment.php
 * User: Julien
 * Date: 27/09/14
 * Time: 19:06
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;
use JulienVinber\QobuzApiPhp\Entity\Author;


class Comment extends QobuzEntity
{
    protected $id;
    protected $content;
    protected $created_at;
    protected $updated_at;
    protected $language;
    protected $flag;
    protected $is_flagged;
    protected $author;
    protected $user_rating;

    protected function initValeur($jsonObject)
    {
        if ($jsonObject->id) {
            $this->id = $jsonObject->id;
        }
        if ($jsonObject->content) {
            $this->content = $jsonObject->content;
        }
        if ($jsonObject->created_at) {
            $this->created_at = $jsonObject->created_at;
        }
        if ($jsonObject->updated_at) {
            $this->updated_at = $jsonObject->updated_at;
        }
        if ($jsonObject->language) {
            $this->language = $jsonObject->language;
        }
        if ($jsonObject->flag) {
            $this->flag = $jsonObject->flag;
        }
        if ($jsonObject->is_flagged) {
            $this->is_flagged = $jsonObject->is_flagged;
        }
        if ($jsonObject->author) {
            $this->author = new Author($jsonObject->author);
        }
        if ($jsonObject->user_rating) {
            $this->user_rating = $jsonObject->user_rating;
        }
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
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return null
     */
    public function getFlag()
    {
        return $this->flag;
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
    public function getIsFlagged()
    {
        return $this->is_flagged;
    }

    /**
     * @return null
     */
    public function getLanguage()
    {
        return $this->language;
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
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @return null
     */
    public function getUserRating()
    {
        return $this->user_rating;
    }
}