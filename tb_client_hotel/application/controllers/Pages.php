<?php
defined('BASEPATH') or exit('No direct script access allowed');

class   Pages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation'); //load fom validation
    }

    public function index()
    {
        $data['title'] = "";

        $this->load->view('templates/header', $data);
        $this->load->view('pages/index', $data);
        $this->load->view('templates/footer');
    }
}
