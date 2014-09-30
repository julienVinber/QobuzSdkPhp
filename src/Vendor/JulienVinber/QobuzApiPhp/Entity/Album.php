<?php
/**
 * Album.php
 * User: Julien
 * Date: 27/09/14
 * Time: 18:46
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;
use JulienVinber\QobuzApiPhp\Entity\Repository\GenreRepository;
use JulienVinber\QobuzApiPhp\Entity\Repository\LabelRepository;
use JulienVinber\QobuzApiPhp\Entity\Sub\Awards;
use JulienVinber\QobuzApiPhp\Entity\Sub\Goodies;
use JulienVinber\QobuzApiPhp\Entity\Sub\Image;
use JulienVinber\QobuzApiPhp\Entity\Repository\ArtistRepository;


/**
 * Class Album
 * @package JulienVinber\QobuzApiPhp\Entity
 */
class Album extends QobuzEntity
{
    protected $id = null;
    protected $title = null;
    protected $released_at = null;
    protected $purchasable = null;
    protected $image = null;
    protected $artist = null;
    protected $label = null;
    protected $genre = null;
    protected $description = null;
    protected $url = null;
    protected $awards = null;
    protected $goodies = null;
    protected $tracks = null;

    const BASEURL_GET = 'album/get';
    const BASEURL_GETFEATURED = 'album/getFeatured';
    const BASEURL_SEARCH = 'album/search';

    /**
     * Return the metadata for an album.
     *
     * @param $app_id - _required_ : Your Application ID (see [Application authentication](https://github.com/Qobuz/api-documentation#appli
     * @param $album_id - _required_ : The album ID to fetch the metadata of.
     */
    static public function get($app_id, $album_id)
    {
        //todo
    }

    /**
     * Return album recommandations by type and/or genre.
     *
     * @param app_id - _required_ : Your Application ID (see [Application authentication](https://github.com/Qobuz/api-documentation#application-auth))
     * @param type - _optional_ : The type of recommandations to fetch: `best-sellers`, `most-streamed`, `new-releases`, `press-awards`, `editor-picks`, `most-featured`
     * @param genre_id - _optional_ : The genre ID to filter the recommandations by.
     */
    static public function getFeatured($app_id, $type, $genre_id)
    {
        //todo
    }

    /**
     * Search for albums by name. Return album matches sorted by relevance.
     *
     * @param app_id - _required_ : Your Application ID (see [Application authentication](https://github.com/Qobuz/api-documentation#application-auth))
     * @param query - _required_ : The term to search for.
     */
    static public function search($app_id, $type, $genre_id)
    {
        //todo
    }

    protected function initValeur($jsonObject)
    {
        if ($jsonObject->id) {
            $this->id = $jsonObject->id;
        }
        if ($jsonObject->title) {
            $this->title = $jsonObject->title;
        }
        if ($jsonObject->released_at) {
            $this->released_at = $jsonObject->released_at;
        }
        if ($jsonObject->purchasable) {
            $this->purchasable = $jsonObject->purchasable;
        }
        if ($jsonObject->image) {
            $this->image = new Image($jsonObject->image);
        }
        if ($jsonObject->artist) {
            $this->artist = ArtistRepository::getOrCreate($jsonObject->artist);
        }
        if ($jsonObject->label) {
            $this->label = LabelRepository::getOrCreate($jsonObject->label);
        }
        if ($jsonObject->genre) {
            $this->genre = GenreRepository::getOrCreate($jsonObject->genre);
        }
        if ($jsonObject->description) {
            $this->description = $jsonObject->description;
        }
        if ($jsonObject->url) {
            $this->url = $jsonObject->url;
        }
        if ($jsonObject->awards) {
            $this->awards = array();
            foreach ($jsonObject->awards as $ligne) {
                $this->awards[] = new Awards($ligne);
            }
        }
        if ($jsonObject->goodies) {
            $this->goodies = array();
            foreach ($jsonObject->goodies as $ligne) {
                $this->goodies[] = new Goodies($ligne);
            }
        }
        if ($jsonObject->tracks) {
            $this->tracks = new Collection($jsonObject->tracks);
        }
    }

    /**
     * @return Artist
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @return array of Awards
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return Genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @return Goodies
     */
    public function getGoodies()
    {
        return $this->goodies;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return Label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return boolean
     */
    public function getPurchasable()
    {
        return $this->purchasable;
    }

    /**
     * @return \DateTime
     */
    public function getReleasedAt()
    {
        return $this->released_at;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return Collection
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}