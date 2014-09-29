<?php
/**
 * FavoriteRepository.php
 * User: Julien
 * Date: 27/09/14
 * Time: 21:51
 */

namespace JulienVinber\QobuzApiPhp\Entity\Repository;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntityRepository;

class FavoriteRepository extends QobuzEntityRepository {

    public function isEntityType($entity)
    {
        return is_a($entity, 'JulienVinber\QobuzApiPhp\Entity\Favorite');
    }

} 