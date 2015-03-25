<?php
/**
 * User.php
 * User: Julien
 * Date: 27/09/14
 * Time: 18:52
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;


class User extends QobuzEntity {

    protected $id;
    protected $email;
    protected $login;
    protected $firstname;
    protected $lastname;
    protected $country;
    protected $avatar;

    /**
     * Return the metadata for an album.
     *
     * @param $app_id - required : Your Application ID (https://github.com/Qobuz/api-documentation#application-auth)
     * @param $username - required : The username of the user.
     * @param $email - optional : Alternatively, its email address.
     * @param $password - required : MD5 hash of the user password.
     */
    public function get($username, $email, $password)
    {
        $this->getValue('/user/login', array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
        ));
    }

    protected function initValeur($jsonObject)
    {
        $jsonObject = $jsonObject->user;
        if ($jsonObject->id) {
            $this->id = $jsonObject->id;
        }

        if ($jsonObject->email) {
            $this->email = $jsonObject->email;
        }

        if ($jsonObject->login) {
            $this->login = $jsonObject->login;
        }

        if ($jsonObject->firstname) {
            $this->firstname = $jsonObject->firstname;
        }

        if ($jsonObject->lastname) {
            $this->lastname = $jsonObject->lastname;
        }

        if ($jsonObject->country) {
            $this->country = $jsonObject->country;
        }

        if ($jsonObject->avatar) {
            $this->avatar = $jsonObject->avatar;
        }
        var_dump($jsonObject);
    }

    protected function getComplet()
    {
        // TODO: Implement getComplet() method.
    }
}