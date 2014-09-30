<?php
/**
 * TrackRepository.php
 * User: Julien
 * Date: 27/09/14
 * Time: 21:47
 */

namespace JulienVinber\QobuzApiPhp\Entity\Repository;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntityRepository;

class TrackRepository extends QobuzEntityRepository
{

    public function getEntityName()
    {
        return 'JulienVinber\QobuzApiPhp\Entity\Track';
    }
} 