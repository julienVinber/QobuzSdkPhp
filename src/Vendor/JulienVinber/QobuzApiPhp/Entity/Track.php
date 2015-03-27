<?php
/**
 * Track.php
 * User: Julien
 * Date: 27/09/14
 * Time: 18:52
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;


class Track extends QobuzEntity
{
    protected $paused;
    protected $position;
    protected $id;

    /**
     * Return a session token for a user.
     *
     * @param $track_id - required : The track ID to fetch the metadata of.
     */
    public function login($track_id)
    {
        $this->getValue('/track/get', array(
            'track_id' => $track_id,
        ));
        $this->recupComplete = true;
    }

    protected function initValeur($jsonObject)
    {
        $this->setUneValeurSimple($jsonObject, 'paused');
        $this->setUneValeurSimple($jsonObject, 'position');
        $this->setUneValeurSimple($jsonObject, 'id');
    }

    protected function getComplet()
    {
        $this->login($this->id);
    }

}