<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Room_model'); //load model kamar
        $this->load->library('form_validation'); //load fom validation
    }

    public function index()
    {
        $data['title'] = "List Data Kamar";

        $data['data_kamar'] = $this->Room_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('room/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = "Detail Data Kamar";

        $data['data_kamar'] = $this->Room_model->getById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('room/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Kamar";

        $this->form_validation->set_rules('room_id', 'ID', 'trim|required|numeric');
        $this->form_validation->set_rules('room_number', 'NO KAMAR', 'trim|required|numeric');
        $this->form_validation->set_rules('floor', 'FLOOR', 'trim|required');
        $this->form_validation->set_rules('room_type_id', 'TYPE KAMAR', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('room/add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
            'room_id' => $this->input->post('room_id'),
            'room_number' => $this->input->post('room_number'),
            'floor' => $this->input->post('floor'),
            'room_type_id' => $this->input->post('room_type_id'),
                "KEY" => "rahasia"
            ];

            $insert = $this->Room_model->save($data);
            if ($insert['response_code'] === 201) {
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('room');
            } elseif ($insert['response_code'] === 400) {
                $this->session->set_flashdata('message', 'Data Duplikat');
                redirect('room');
            } else {
                $this->session->set_flashdata('message', 'Gagal!!');
                redirect('room');
            }
        }
    }

    public function edit($id)
    {
        $data['title'] = "Ubah Data Kamar";
        $data['data_kamar'] = $this->Room_model->getById($id);

        $this->form_validation->set_rules('room_id', 'ROOM ID', 'trim|required|numeric');
        $this->form_validation->set_rules('room_number', 'NO KAMAR', 'trim|required|numeric');
        $this->form_validation->set_rules('floor', 'FLOOR', 'trim|required');
        $this->form_validation->set_rules('room_type_id', 'ROOM TYPE', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('room/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'room_id' => $this->input->post('room_id'),
                'room_number' => $this->input->post('room_number'),
                'floor' => $this->input->post('floor'),
                'room_type_id' => $this->input->post('room_type_id'),
                    "KEY" => "rahasia"
            ];

            $update = $this->Room_model->edit($data);
            if ($update['response_code'] === 201) {
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('room');
            } elseif ($update['response_code'] === 400) {
                $this->session->set_flashdata('message', 'Data Duplikat');
                redirect('room');
            } else {
                $this->session->set_flashdata('message', 'Gagal!!');
                redirect('room');
            }
        }
    }

    public function delete($room_id)
    {
        $update = $this->Room_model->delete($room_id);
        if ($update['response_code'] === 200) {
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('room');
        } else {
            $this->session->set_flashdata('message', 'Gagal!!');
            redirect('room');
        }
    }
}
