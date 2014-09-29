<?php
/**
 * ArticleRepository.php
 * User: Julien
 * Date: 27/09/14
 * Time: 21:47
 */

namespace JulienVinber\QobuzApiPhp\Entity\Repository;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntityRepository;

class ArticleRepository extends QobuzEntityRepository {

    public function isEntityType($entity)
    {
        return is_a($entity, 'JulienVinber\QobuzApiPhp\Entity\Article');
    }

} 