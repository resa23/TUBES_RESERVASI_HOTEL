<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Receptionist extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Receptionist_model'); //load model reservasi
        $this->load->library('form_validation'); //load fom validation
    }

    public function index()
    {
        $data['title'] = "List Data Resepsionis";

        $data['data_receptionist'] = $this->Receptionist_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('receptionist/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($receptionist_id)
    {
        $data['title'] = "Detail Data Resepsionis";

        $data['data_receptionist'] = $this->Receptionist_model->getById($receptionist_id);
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('receptionist/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Resepsionis";

        $this->form_validation->set_rules('receptionist_id', 'RECEPTIONIST ID', 'trim|required|numeric');
        $this->form_validation->set_rules('name', 'NAME', 'trim|required');
        $this->form_validation->set_rules('phone', 'PHONE', 'trim|required');
        $this->form_validation->set_rules('email', 'EMAIL', 'trim|required');
        $this->form_validation->set_rules('address', 'ADDRESS', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('receptionist/add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'receptionist_id' => $this->input->post('receptionist_id'),
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                "KEY" => "rahasia"
            ];

            $insert = $this->Receptionist_model->save($data);
            if ($insert['response_code'] === 201) {
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('receptionist');
            } elseif ($insert['response_code'] === 400) {
                $this->session->set_flashdata('message', 'Data Duplikat');
                redirect('receptionist');
            } else {
                $this->session->set_flashdata('message', 'Gagal!!');
                redirect('receptionist');
            }
        }
    }

    public function edit($receptionist_id)
    {
        $data['title'] = "Ubah Data Resepsionis";
        $data['data_receptionist'] = $this->Receptionist_model->getById($receptionist_id);

        $this->form_validation->set_rules('receptionist_id', 'RECEPTIONIST ID', 'trim|required|numeric');
        $this->form_validation->set_rules('name', 'NAME', 'trim|required');
        $this->form_validation->set_rules('phone', 'PHONE', 'trim|required');
        $this->form_validation->set_rules('email', 'EMAIL', 'trim|required');
        $this->form_validation->set_rules('address', 'ADDRESS', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('receptionist/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'receptionist_id' => $this->input->post('receptionist_id'),
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                "KEY" => "rahasia"
            ];

            $update = $this->Receptionist_model->edit($data);
            if ($update['response_code'] === 201) {
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('receptionist');
            } elseif ($update['response_code'] === 400) {
                $this->session->set_flashdata('message', 'Data Duplikat');
                redirect('receptionist');
            } else {
                $this->session->set_flashdata('message', 'Gagal!!');
                redirect('receptionist');
            }
        }
    }

    public function delete($receptionist_id)
    {
        $update = $this->Receptionist_model->delete($receptionist_id);
        if ($update['response_code'] === 200) {
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('receptionist');
        } else {
            $this->session->set_flashdata('message', 'Gagal!!');
            redirect('receptionist');
        }
    }
}
