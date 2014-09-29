<?php
/**
 * ArtistRepository.php
 * User: Julien
 * Date: 27/09/14
 * Time: 20:58
 */

namespace JulienVinber\QobuzApiPhp\Entity\Repository;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntityRepository;

class ArtistRepository extends QobuzEntityRepository {

    public function isEntityType($entity)
    {
        return is_a($entity, 'JulienVinber\QobuzApiPhp\Entity\Artist');
    }
}