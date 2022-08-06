<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model'); 
        $this->load->library('form_validation'); //load fom validation
		$this->load->library('session');
    }

	public function index()
	{
        $data['title'] = "Register";
		if ($this->session->userdata('KEY') == '') {
            $this->load->view('templates/header');
			$this->load->view('sbadmin/login');
            $this->load->view('templates/footer');
		}
		else {
			redirect('reservation');
		}


	}

	public function login() {

        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if($this->form_validation->run() == false) {
            $this->load->view('templates/header');
			$this->load->view('sbadmin/login');
            $this->load->view('templates/footer');
        } else {
		$data = [
			"username" => $this->input->post('username'),
			"password" => $this->input->post('password'),
		];

		$insert = $this->Auth_model->loginTry($data);
       
		if($insert['status'] == 'Login Berhasil'){
			$this->session->set_flashdata('flash','Login Berhasil!');
			redirect('reservation');
		}elseif ($insert['status'] == 'Login Gagal') {
			$this->session->set_flashdata('message','Username atau Password Salah!');
			redirect('auth');
		}else{
			$this->session->set_flashdata('message', 'Login Error!');
			redirect('auth');
		}

	}
	
}

	public function logout() {
		$this->session->unset_userdata('KEY');
		redirect('auth');
	}

	public function register()
	{
        $this->load->view('templates/header');
        $this->load->view('sbadmin/register');
        $this->load->view('templates/footer');
    
	}

	public function registerTry()
	{
        
		$data = [
			"name" => $this->input->post('name'),
			"phone" => $this->input->post('phone'),
			"email" => $this->input->post('email'),
            "address" => $this->input->post('address'),
			"username" => $this->input->post('username'),
			"password" => $this->input->post('password'),
		];


		$insert = $this->Auth_model->registerTry($data);
        
        if ($insert) {
	        $this->session->set_flashdata('flash','Register Berhasil!');
            $this->session->set_userdata(['user_id' => $insert]);
			// $this->generateapikey($insert);
            redirect('auth/generateapikey');
        } else {
	        $this->session->set_flashdata('message', 'Register Error!');
			redirect('auth/register');
        }
		// if($insert['status'] == 'Register Berhasil'){
		// 	$this->session->set_flashdata('flash','Register Berhasil!');
		// 	// $this->generateapikey($insert['data']);
        //     redirect('auth/generateapikey');
		// }elseif ($insert['status'] == 'Register Gagal') {
		// 	$this->session->set_flashdata('message',' Data Tidak boleh ada yang kosong!');
		// 	redirect('auth/register');
		// }else{
		// 	$this->session->set_flashdata('message', 'Register Error!');
		// 	redirect('auth/register');
		// }
	}

	public function generateapikey() {
        // $data = [
		// 	'user_id' => $id,
		// ];
        
        $this->load->view('templates/header');
		$this->load->view('sbadmin/vw_generate');
        $this->load->view('templates/footer');
	}

	public function generatekey() {
		
		$data = [
			'user_id' => $this->session->userdata('user_id'),
			'key' => $this->input->post('key'),
		];

        
		$saveLock = $this->Auth_model->saveLock($data);
        
        // var_dump($saveLock);
        // die;
        if ($saveLock) {
            redirect('auth/login');
        }
        // if($saveLock['data']) {
        //     $data =[
        //         'apikey' => $newKey,
        //     ];
        //     $this->load->view('templates/header');
        //     $this->load->view('sbadmin/vw_generate', $data);
        //     $this->load->view('templates/footer');
        // }
	}
}