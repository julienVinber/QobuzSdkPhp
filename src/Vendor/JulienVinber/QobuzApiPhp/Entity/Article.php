<?php
/**
 * Article.php
 * User: Julien
 * Date: 27/09/14
 * Time: 19:04
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;


class Article extends QobuzEntity
{
    protected $id = null;
    protected $title = null;
    protected $description = null;
    protected $published_at = null;
    protected $abstract = null;
    protected $content = null;
    protected $url = null;
    protected $author = null;
    protected $source = null;
    protected $category = null;
    protected $image = null;

    protected function initValeur($jsonObject)
    {
        // TODO: Implement initValeur() method.
    }
}