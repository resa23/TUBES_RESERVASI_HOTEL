<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class Auth_model extends CI_Model {

    private $_guzzle;

    public function __construct()
    {
        parent::__construct();
        $this->_guzzle = new Client([
            'base_uri' => 'http://localhost/tb_rest_hotel/auth',
        ]);
    }

    public function loginTry($data)
    {
        $response = $this->_guzzle->request('POST', '', [
            'http_errors' => false,
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(),TRUE);

        return $result;
    }

    public function registerTry($data)
    {
        $this->_guzzle = new Client([
            'base_uri' => 'http://localhost/tb_rest_hotel/auth/register',
        ]);

        $response = $this->_guzzle->request('POST', '', [
            'http_errors' => false,
            'form_params' => $data
        ]);

        
        $result = json_decode($response->getBody(),TRUE);
        return $result;
    }

    public function saveLock($data) {
        $saveLockUri = new Client([
            'base_uri' => 'http://localhost/tb_rest_hotel/auth/saveLock',
        ]);

        $response = $saveLockUri->request('POST', '', [
            'http_errors' => false,
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(),TRUE);

        return $result;
    }
}