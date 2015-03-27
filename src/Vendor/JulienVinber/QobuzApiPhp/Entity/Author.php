<?php
/**
 * Author.php
 * User: Julien
 * Date: 07/10/14
 * Time: 21:05
 */

namespace JulienVinber\QobuzApiPhp\Entity;


use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;

class Author extends QobuzEntity
{
    protected $id;
    protected $name;
    protected $avatar;
    protected $comments_count;

    protected function initValeur($jsonObject)
    {
        if ($jsonObject->id) {
            $this->id = $jsonObject->id;
        }
        if ($jsonObject->name) {
            $this->name = $jsonObject->name;
        }
        if ($jsonObject->avatar) {
            $this->avatar = $jsonObject->avatar;
        }
        if ($jsonObject->comments_count) {
            $this->comments_count = $jsonObject->comments_count;
        }
    }

    /**
     * @return null
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @return null
     */
    public function getCommentsCount()
    {
        return $this->comments_count;
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
}