<?php
/**
 * FavoriteRepository.php
 * User: Julien
 * Date: 27/09/14
 * Time: 21:51
 */

namespace JulienVinber\QobuzApiPhp\Entity\Repository;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntityRepository;

class FavoriteRepository extends QobuzEntityRepository
{

    public function getEntityName()
    {
        return 'JulienVinber\QobuzApiPhp\Entity\Favorite';
    }
} 