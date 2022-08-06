<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Reservation_model extends CI_Model
{

    private $_guzzle;

    public function __construct()
    {
        parent::__construct();
        $this->_guzzle = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost/tb_rest_hotel/reservation',
            // You can set any number of default request options.
            'auth'  => ['ulbi', 'pemrograman3'],
        ]);
    }

    public function getAll()
    {
        $response = $this->_guzzle->request('GET', '', [
            'query' => [
                'KEY' => ''
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result['data'];
    }

    public function getById($reservation_id)
    {
        $response = $this->_guzzle->request('GET', '', [
            'query' => [
                'KEY' => '',
                'reservation_id' => $reservation_id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result['data'];
    }

    public function save($data)
    {
        $response = $this->_guzzle->request('POST', '', [
            'http_errors' => false,
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }

    public function update($data)
    {
        $response = $this->_guzzle->request('PUT', '', [
            'http_errors' => false,
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }

    public function delete($reservation_id)
    {
        $response = $this->_guzzle->request('DELETE', '', [
            'form_params' => [
                'http_errors' => false,
                'KEY' => '',
                'reservation_id' => $reservation_id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }
}
