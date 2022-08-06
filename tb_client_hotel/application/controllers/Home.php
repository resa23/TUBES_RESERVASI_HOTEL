<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->_guzzle = new Client ([
			'base_uri' => 'http://localhost/tb_rest_hotel/index.php/home',
		]);

	}

	public function index()
	{
		$this->load->view('vw_home');
	}

	public function proses()
	{
		$data = array(
            'username'      => $this->session->userdata('username'),
            'key'      => $this->input->post('key'),
            'level'      => 1,
            // 'ignore_limits'      => $this->input->post('ignore_limits'),
            // 'is_private_key'      => $this->input->post('is_private_key'),
            // 'ip_addresses'      => $this->input->post('ip_addresses'),
            // 'date_created'      => $this->input->post('date_created')
        );
       

		$insert = new Client([
			'base_uri' => 'http://localhost/tb_rest_hotel/index.php/home',
		]);

		$response = $insert->request('POST', '',[
			'http_erors' => false,
			'form_params' => $data

		]);

		$result = json_decode($response->getBody()->getContents(),TRUE);


        if($result)

        {
            $this->session->set_flashdata('success_register','Proses Api Key Berhasil Dibuat');
        }else
        {
            $this->session->set_flashdata('success_register','Proses Api Key Gagal');
        }
        redirect('home');
     	
	
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_login');
		redirect('login');
	}

	

}
