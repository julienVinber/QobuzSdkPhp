<?php
/**
 * QobuzClient.php
 * User: julien.vinber
 * Date: 25/03/2015
 * Time: 13:39
 */

namespace JulienVinber\QobuzApiPhp\Entity;


class QobuzClient 
{
    protected $app_id;
    protected $app_secret;
    protected $user_auth_token;

    function __construct($app_id, $app_secret)
    {
        $this->app_id = $app_id;
        $this->app_secret = $app_secret;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * @param mixed $app_id
     */
    public function setAppId($app_id)
    {
        $this->app_id = $app_id;
    }

    /**
     * @return mixed
     */
    public function getAppSecret()
    {
        return $this->app_secret;
    }

    /**
     * @param mixed $app_secret
     */
    public function setAppSecret($app_secret)
    {
        $this->app_secret = $app_secret;
    }

    public function getValue($url, $paramGet){
        $paramGet['app_id'] = $this->app_id;

        $urlExec = 'http://www.qobuz.com/api.json/0.2' . $url . '?' . http_build_query($paramGet, '');
        print_r($urlExec);

        $retour = file_get_contents($urlExec);

        $value = json_decode($retour);


        if ($value->user_auth_token) {
            $this->user_auth_token = $value->user_auth_token;
        }
        return json_decode($retour);
    }

    /**
     * @return null
     */
    public function getUserAuthToken()
    {
        return $this->user_auth_token;
    }

    /**
     * @param null $user_auth_token
     */
    public function setUserAuthToken($user_auth_token)
    {
        $this->user_auth_token = $user_auth_token;
    }

} 