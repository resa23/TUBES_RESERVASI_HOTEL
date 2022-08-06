<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservation extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Reservation_model'); //load model reservasi
        $this->load->model('Room_model'); //load model reservasi
        $this->load->model('Guest_model'); //load model reservasi\
        $this->load->model('Room_type_model'); //load model reservasi
        $this->load->library('form_validation'); //load fom validation
    }

    public function index()
    {
        $data['title'] = "List Data Reservasi";

        $data['data_reservasi'] = $this->Reservation_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('reservation/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($reservation_id)
    {
        $data['title'] = "Detail Data Reservasi";

        $data['data_reservasi'] = $this->Reservation_model->getById($reservation_id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('reservation/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Reservasi";

        $this->form_validation->set_rules('reservation_id', 'reservation_id', 'trim|required|numeric');
        $this->form_validation->set_rules('check_in', 'check_in', 'trim|required');
        $this->form_validation->set_rules('guest_id', 'guest_id', 'trim|required');
        $this->form_validation->set_rules('room_id', 'room_id', 'trim|required');
        $this->form_validation->set_rules('room_type_id', 'room_type_id', 'trim|required');
        $this->form_validation->set_rules('check_out', 'check_out', 'trim|required');
        $this->form_validation->set_rules('total_charge', 'total_charge', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('reservation/add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'reservation_id' => $this->input->post('reservation_id'),
                'check_in' => $this->input->post('check_in'),
                'guest_id' => $this->input->post('guest_id'),
                'room_id' => $this->input->post('room_id'),
                'room_type_id' => $this->input->post('room_type_id'),
                'check_out' => $this->input->post('check_out'),
                'total_charge' => $this->input->post('total_charge'),
                "KEY" => ""
            ];
            // var_dump($data);
            $insert = $this->Reservation_model->save($data);
            if ($insert['response_code'] === 201) {
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('reservation');
            } elseif ($insert['response_code'] === 400) {
                $this->session->set_flashdata('message', 'Data Duplikat');
                redirect('reservation');
            } else {
                $this->session->set_flashdata('message', 'Gagal!!');
                redirect('reservation');
            }
        }
    }

    public function edit($reservation_id)
    {
        $data['title'] = "Ubah Data Reservasi";
        $data['data_reservasi'] = $this->Reservation_model->getById($reservation_id);

        $this->form_validation->set_rules('reservation_id', 'reservation_id', 'trim|required|numeric');
        $this->form_validation->set_rules('check_in', 'check_in', 'trim|required');
        $this->form_validation->set_rules('guest_id', 'guest_id', 'trim|required');
        $this->form_validation->set_rules('room_id', 'room_id', 'trim|required');
        $this->form_validation->set_rules('room_type_id', 'room_type_id', 'trim|required');
        $this->form_validation->set_rules('check_out', 'check_out', 'trim|required');
        $this->form_validation->set_rules('total_charge', 'total_charge', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('reservation/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'reservation_id' => $this->input->post('reservation_id'),
                'check_in' => $this->input->post('check_in'),
                'guest_id' => $this->input->post('guest_id'),
                'room_id' => $this->input->post('room_id'),
                'room_type_id' => $this->input->post('room_type_id'),
                'check_out' => $this->input->post('check_out'),
                'total_charge' => $this->input->post('total_charge'),
                "KEY" => ""
            ];

            $update = $this->Reservation_model->update($data);
            if ($update['response_code'] === 201) {
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('reservation');
            } elseif ($update['response_code'] === 400) {
                $this->session->set_flashdata('message', 'Data Duplikat');
                redirect('reservation');
            } else {
                $this->session->set_flashdata('message', 'Gagal!!');
                redirect('reservation');
            }
        }
    }

    public function delete($reservation_id)
    {
        $update = $this->Reservation_model->delete($reservation_id);
        if ($update['response_code'] === 200) {
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('reservation');
        } else {
            $this->session->set_flashdata('message', 'Gagal!!');
            redirect('reservation');
        }
    }
}
