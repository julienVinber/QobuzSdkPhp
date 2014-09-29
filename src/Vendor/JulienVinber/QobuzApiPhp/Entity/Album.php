<?php
/**
 * Album.php
 * User: Julien
 * Date: 27/09/14
 * Time: 18:46
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;
use JulienVinber\QobuzApiPhp\Entity\Sub\Image;


/**
 * Class Album
 * @package JulienVinber\QobuzApiPhp\Entity
 */
class Album extends QobuzEntity
{
    protected $id;
    protected $title;
    protected $released_at;
    protected $purchasable;
    protected $image;
    protected $artist;
    protected $label;
    protected $genre;
    protected $description;
    protected $awards;
    protected $goodies;
    protected $tracks;

    private $baseURL = 'album/get';

    /**
     * @param $app_id _required_ : Your Application ID (see [Application authentication](https://github.com/Qobuz/api-documentation#appli
     * @param $album_id _required_ : The album ID to fetch the metadata of.
     */
    static public function get($app_id, $album_id)
    {
    }

    public function getRequestBase()
    {
        return $this->baseURL;
    }

    public function parsJson($json)
    {
        $value = json_decode($json);
        $this->id = $value->id;
        $this->title = $value->title;
        $this->released_at = $value->released_at;
        $this->purchasable = $value->purchasable;
        $this->image = new Image($value->image);
        $this->artist = new Artist($value->artist);
        $this->label;
        $this->genre;
        $this->description;
        $this->awards;
        $this->goodies;
        $this->tracks;
    }
}