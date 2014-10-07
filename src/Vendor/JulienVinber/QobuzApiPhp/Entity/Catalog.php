<?php
/**
 * Catalog.php
 * User: Julien
 * Date: 27/09/14
 * Time: 19:06
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;


class Catalog extends QobuzEntity {
    protected $query = null;
    protected $tracks = null;
    protected $albums = null;
    protected $playlists = null;
    protected $suggestions = null;

    protected function initValeur($jsonObject)
    {
        if ($jsonObject->query) {
            $this->query = $jsonObject->query;
        }
        if ($jsonObject->tracks) {
            $this->tracks = Collection::createTracksCommection($jsonObject->tracks);
        }
        if ($jsonObject->albums) {
            $this->albums = Collection::createAlbumsCommection($jsonObject->tracks);
        }
        if ($jsonObject->playlists) {
            $this->playlists = Collection::createPlaylistsCommection($jsonObject->tracks);
        }
        if ($jsonObject->suggestions) {
            $this->suggestions = array();
            foreach($jsonObject->suggestions as $ligne){
                $this->suggestions[] = $ligne;
            }
        }
    }

    /**
     * @return null
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * @return null
     */
    public function getPlaylists()
    {
        return $this->playlists;
    }

    /**
     * @return null
     */
    public function getQuery()
    {
        return $this->query;
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
    public function getSuggestions()
    {
        return $this->suggestions;
    }

    /**
     * @return null
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    protected function getComplet()
    {
        // TODO: Implement getComplet() method.
    }
}