<?php
/**
 * index.php
 * User: julien.vinber
 * Date: 25/03/2015
 * Time: 13:14
 */

include_once('config.inc.php');
include_once('SplClassLoader.php');
$loader = new SplClassLoader('JulienVinber', '\src\Vendor');
$loader->register();


$qobuzClient = new \JulienVinber\QobuzApiPhp\Entity\QobuzClient($app_id, $app_secret);

$user = new \JulienVinber\QobuzApiPhp\Entity\User($qobuzClient);

$user->login($login, '', $mdp);

var_dump($user);