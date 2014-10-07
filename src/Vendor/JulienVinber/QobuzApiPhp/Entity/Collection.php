<?php
/**
 * Collection.php
 * User: Julien
 * Date: 27/09/14
 * Time: 19:06
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;


class Collection extends QobuzEntity
{
    protected $offset = null;
    protected $limit = null;
    protected $total = null;
    protected $items = null;

    protected $typeItems = null;
    const TYPE_ALBUMS = 0;
    const TYPE_ARTISTS = 1;
    const TYPE_TRACKS = 2;
    const TYPE_PLAYLISTS = 3;
    const TYPE_COMMENT = 4;

    static public function createAlbumsCommection($json = null)
    {
        $collection = new Collection();
        $collection->setTypeItems(self::TYPE_ALBUMS);
        $collection->initValeur($json);
        return $collection;
    }

    static public function creatArtistsCommection($json = null)
    {
        $collection = new Collection();
        $collection->setTypeItems(self::TYPE_ARTISTS);
        $collection->initValeur($json);
        return $collection;
    }

    static public function createTracksCommection($json = null)
    {
        $collection = new Collection();
        $collection->setTypeItems(self::TYPE_TRACKS);
        $collection->initValeur($json);
        return $collection;
    }

    static public function createPlaylistsCommection($json = null)
    {
        $collection = new Collection();
        $collection->setTypeItems(self::TYPE_PLAYLISTS);
        $collection->initValeur($json);
        return $collection;
    }

    protected function initValeur($jsonObject)
    {
        if ($jsonObject->offset) {
            $this->offset = $jsonObject->offset;
        }
        if ($jsonObject->limit) {
            $this->limit = $jsonObject->limit;
        }
        if ($jsonObject->total) {
            $this->total = $jsonObject->total;
        }
        if ($jsonObject->items) {
            $this->items = array();
            if ($this->typeItems == self::TYPE_ALBUMS){
                foreach($jsonObject->items as $ligne){
                    $this->items[] = new Album($ligne);
                }
            } elseif ($this->typeItems == self::TYPE_ARTISTS){
                foreach($jsonObject->items as $ligne){
                    $this->items[] = new Artist($ligne);
                }
            } elseif ($this->typeItems == self::TYPE_TRACKS){
                foreach($jsonObject->items as $ligne){
                    $this->items[] = new Track($ligne);
                }
            } elseif ($this->typeItems == self::TYPE_PLAYLISTS){
                foreach($jsonObject->items as $ligne){
                    $this->items[] = new Playlist($ligne);
                }
            } elseif ($this->typeItems == self::TYPE_COMMENT){
                foreach($jsonObject->items as $ligne){
                    $this->items[] = new Comment($ligne);
                }
            }
        }
    }

    /**
     * @return null
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return null
     */
    public function getOffset()
    {
        return $this->offset;
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
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return null
     */
    public function getTypeItems()
    {
        return $this->typeItems;
    }

    /**
     * @param null $typeItems
     */
    public function setTypeItems($typeItems)
    {
        $this->typeItems = $typeItems;
    }

    protected function getComplet()
    {
        // TODO: Implement getComplet() method.
    }
}