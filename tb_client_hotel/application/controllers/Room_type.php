<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room_type extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Room_type_model'); //load model kamar
        $this->load->library('form_validation'); //load fom validation
    }

    public function index()
    {
        $data['title'] = "List Data Tipe Kamar";

        $data['data_tipe_kamar'] = $this->Room_type_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('room_type/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($room_type_id)
    {
        $data['title'] = "Detail Data Tipe Kamar";

        $data['data_tipe_kamar'] = $this->Room_type_model->getById($room_type_id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('room_type/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Tipe Kamar";

        $this->form_validation->set_rules('room_type_id', 'ROOM TYPE ID', 'trim|required|numeric');
        $this->form_validation->set_rules('room_type_name', 'room_type_name', 'trim|required');
        $this->form_validation->set_rules('price', 'price', 'trim|required');
        $this->form_validation->set_rules('facility', 'facility', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('room_type/add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'room_type_id' => $this->input->post('room_type_id'),
                'room_type_name' => $this->input->post('room_type_name'),
                'price' => $this->input->post('price'),
                'facility' => $this->input->post('facility'),
                "KEY" => ""
            ];

            $insert = $this->Room_type_model->save($data);
            if ($insert['response_code'] === 201) {
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('room_type');
            } elseif ($insert['response_code'] === 400) {
                $this->session->set_flashdata('message', 'Data Duplikat');
                redirect('room_type');
            } else {
                $this->session->set_flashdata('message', 'Gagal!!');
                redirect('room_type');
            }
        }
    }

    public function edit($room_type_id)
    {
        $data['title'] = "Ubah Data Tipe Kamar";
        $data['data_tipe_kamar'] = $this->Room_type_model->getById($room_type_id);

        $this->form_validation->set_rules('room_type_name', 'room_type_name', 'trim|required');
        $this->form_validation->set_rules('price', 'price', 'trim|required');
        $this->form_validation->set_rules('facility', 'facility', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('room_type/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'room_type_id' => $this->input->post('room_type_id'),
                'room_type_name' => $this->input->post('room_type_name'),
                'price' => $this->input->post('price'),
                'facility' => $this->input->post('facility'),
                "KEY" => ""
            ];

            $update = $this->Room_type_model->update($data);
            if ($update['response_code'] === 201) {
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('room_type');
            } elseif ($update['response_code'] === 400) {
                $this->session->set_flashdata('message', 'Data Duplikat');
                redirect('room_type');
            } else {
                $this->session->set_flashdata('message', 'Gagal!!');
                redirect('room_type');
            }
        }
    }

    public function delete($room_type_id)
    {
        $update = $this->Room_model->delete($room_type_id);
        if ($update['response_code'] === 200) {
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('room_type');
        } else {
            $this->session->set_flashdata('message', 'Gagal!!');
            redirect('room_type');
        }
    }
}
