<?php
/**
 * PlaylistRepository.php
 * User: Julien
 * Date: 27/09/14
 * Time: 21:50
 */

namespace JulienVinber\QobuzApiPhp\Entity\Repository;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntityRepository;

class PlaylistRepository extends QobuzEntityRepository {

    public function isEntityType($entity)
    {
        return is_a($entity, 'JulienVinber\QobuzApiPhp\Entity\Playlist');
    }

} 