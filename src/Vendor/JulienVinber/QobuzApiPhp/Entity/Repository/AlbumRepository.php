<?php
/**
 * AlbumRepository.php
 * User: Julien
 * Date: 27/09/14
 * Time: 21:46
 */

namespace JulienVinber\QobuzApiPhp\Entity\Repository;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntityRepository;

class AlbumRepository extends QobuzEntityRepository {

    public function isEntityType($entity)
    {
        return is_a($entity, 'JulienVinber\QobuzApiPhp\Entity\Album');
    }

} 