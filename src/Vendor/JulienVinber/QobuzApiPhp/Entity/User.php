<?php
/**
 * User.php
 * User: Julien
 * Date: 27/09/14
 * Time: 18:52
 */

namespace JulienVinber\QobuzApiPhp\Entity;

use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;

class User extends QobuzEntity
{

    protected $id;
    protected $email;
    protected $login;
    protected $firstname;
    protected $lastname;
    protected $country;
    protected $avatar;
    protected $player_settings;
    protected $credential;
    protected $externals;


    /**
     * Return a session token for a user.
     *
     * @param $username - required : The username of the user.
     * @param $email - optional : Alternatively, its email address.
     * @param $password - required : MD5 hash of the user password.
     */
    public function login($username, $email, $password)
    {
        $this->getValue('/user/login', array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
        ));
        $this->recupComplete = true;
    }

    /**
     * Send email instructions to allow password reset.
     *
     * @param $username - required : The username of the user.
     * @param $email - optional : Alternatively, its email address.
     */
    public function resetPassword($username, $email)
    {
        $this->getValue('/user/resetPassword', array(
            'username' => $username,
            'email' => $email,
        ));
        $this->recupComplete = true;
    }

    protected function initValeur($jsonObject)
    {
        $jsonObject = $jsonObject->user;

        $this->setUneValeurSimple($jsonObject, 'id');
        $this->setUneValeurSimple($jsonObject, 'email');
        $this->setUneValeurSimple($jsonObject, 'login');
        $this->setUneValeurSimple($jsonObject, 'firstname');
        $this->setUneValeurSimple($jsonObject, 'lastname');
        $this->setUneValeurSimple($jsonObject, 'country');
        $this->setUneValeurSimple($jsonObject, 'avatar');
        $this->setUneValeurObjet($jsonObject, 'player_settings', 'JulienVinber\QobuzApiPhp\Entity\PlayerSettings');
        $this->setUneValeurObjet($jsonObject, 'credential', 'JulienVinber\QobuzApiPhp\Entity\Credential');
        $this->setUneValeurObjet($jsonObject, 'externals', 'JulienVinber\QobuzApiPhp\Entity\Externals');
    }
}