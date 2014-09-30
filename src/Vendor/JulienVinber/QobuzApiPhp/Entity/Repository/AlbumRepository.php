<?php
/**
 * AlbumRepository.php
 * User: Julien
 * Date: 27/09/14
 * Time: 21:46
 */

namespace JulienVinber\QobuzApiPhp\Entity\Repository;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntityRepository;

class AlbumRepository extends QobuzEntityRepository
{

    public function getEntityName()
    {
        return 'JulienVinber\QobuzApiPhp\Entity\Album';
    }
} 