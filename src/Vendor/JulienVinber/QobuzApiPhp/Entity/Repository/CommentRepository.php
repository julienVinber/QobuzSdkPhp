<?php
/**
 * CommentRepository.php
 * User: Julien
 * Date: 27/09/14
 * Time: 21:52
 */

namespace JulienVinber\QobuzApiPhp\Entity\Repository;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntityRepository;

class CommentRepository extends QobuzEntityRepository
{

    public function getEntityName()
    {
        return 'JulienVinber\QobuzApiPhp\Entity\Comment';
    }
} 