<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Payment_model'); //load model reservasi
        $this->load->library('form_validation'); //load fom validation
    }

    public function index()
    {
        $data['title'] = "List Data Payment";

        $data['data_payment'] = $this->Payment_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('payment/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($payment_id)
    {
        $data['title'] = "Detail Data Payment";

        $data['data_payment'] = $this->Payment_model->getById($payment_id);
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('payment/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Payment";

        $this->form_validation->set_rules('payment_id', 'RECEPTIONIST ID', 'trim|required|numeric');
        $this->form_validation->set_rules('name', 'NAME', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('payment/add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'payment_id' => $this->input->post('payment_id'),
                'name' => $this->input->post('name'),
                "KEY" => "rahasia"
            ];

            $insert = $this->Payment_model->save($data);
            if ($insert['response_code'] === 201) {
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('payment');
            } elseif ($insert['response_code'] === 400) {
                $this->session->set_flashdata('message', 'Data Duplikat');
                redirect('payment');
            } else {
                $this->session->set_flashdata('message', 'Gagal!!');
                redirect('payment');
            }
        }
    }

    public function edit($payment_id)
    {
        $data['title'] = "Ubah Data Payment";
        $data['data_payment'] = $this->Payment_model->getById($payment_id);

        $this->form_validation->set_rules('payment_id', 'RECEPTIONIST ID', 'trim|required|numeric');
        $this->form_validation->set_rules('name', 'NAME', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('payment/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'payment_id' => $this->input->post('payment_id'),
                'name' => $this->input->post('name'),
                "KEY" => "rahasia"
            ];

            $update = $this->Payment_model->edit($data);
            if ($update['response_code'] === 201) {
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('payment');
            } elseif ($update['response_code'] === 400) {
                $this->session->set_flashdata('message', 'Data Duplikat');
                redirect('payment');
            } else {
                $this->session->set_flashdata('message', 'Gagal!!');
                redirect('payment');
            }
        }
    }

    public function delete($payment_id)
    {
        $update = $this->Payment_model->delete($payment_id);
        if ($update['response_code'] === 200) {
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('payment');
        } else {
            $this->session->set_flashdata('message', 'Gagal!!');
            redirect('payment');
        }
    }
}
