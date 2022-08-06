<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guest_model'); //load model Tamu
        $this->load->library('form_validation'); //load fom validation
    }

    public function index()
    {
        $data['title'] = "List Data Tamu";

        $data['data_tamu'] = $this->Guest_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('guest/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($guest_id)
    {
        $data['title'] = "Detail Data Tamu";

        $data['data_tamu'] = $this->Guest_model->getById($guest_id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('guest/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Tamu";

        $this->form_validation->set_rules('guest_id', 'guest_id', 'trim|required|numeric');
        $this->form_validation->set_rules('guest_name', 'guest_name', 'trim|required');
        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('guest_phone', 'guest_phone', 'trim|required');
        $this->form_validation->set_rules('guest_address', 'guest_address', 'trim|required');
        $this->form_validation->set_rules('room_number', 'room_number', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('guest/add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                "guest_id" => $this->input->post('guest_id'),
                "guest_name" => $this->input->post('guest_name'),
                "nik" => $this->input->post('nik'),
                "guest_phone" => $this->input->post('guest_phone'),
                "guest_address" => $this->input->post('guest_address'),
                "room_number" => $this->input->post('room_number'),
                "KEY" => ""
            ];

            $insert = $this->Guest_model->save($data);
            if ($insert['response_code'] === 201) {
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('guest');
            } elseif ($insert['response_code'] === 400) {
                $this->session->set_flashdata('message', 'Data Duplikat');
                redirect('guest');
            } else {
                $this->session->set_flashdata('message', 'Gagal!!');
                redirect('guest');
            }
        }
    }

    public function edit($guest_id)
    {
        $data['title'] = "Ubah Data Tamu";
        $data['data_tamu'] = $this->Guest_model->getById($guest_id);

        $this->form_validation->set_rules('guest_name', 'guest_name', 'trim|required');
        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('guest_phone', 'guest_phone', 'trim|required');
        $this->form_validation->set_rules('guest_address', 'guest_address', 'trim|required');
        $this->form_validation->set_rules('room_number', 'room_number', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('guest/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                "guest_id" => $this->input->post('guest_id'),
                "guest_name" => $this->input->post('guest_name'),
                "nik" => $this->input->post('nik'),
                "guest_phone" => $this->input->post('guest_phone'),
                "guest_address" => $this->input->post('guest_address'),
                "room_number" => $this->input->post('room_number'),
                "KEY" => ""
            ];

            $update = $this->Guest_model->edit($data);
            if ($update['response_code'] === 201) {
                $this->session->set_flashdata('flash', 'Data Diedit');
                redirect('guest');
            } elseif ($update['response_code'] === 400) {
                $this->session->set_flashdata('message', 'Data Duplikat');
                redirect('guest');
            } else {
                $this->session->set_flashdata('message', 'Gagal!!');
                redirect('guest');
            }
        }
    }

    public function delete($guest_id)
    {
        $update = $this->Guest_model->delete($guest_id);
        if ($update['response_code'] === 200) {
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('guest');
        } else {
            $this->session->set_flashdata('message', 'Gagal!!');
            redirect('guest');
        }
    }
}
