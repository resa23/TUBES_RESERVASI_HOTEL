<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bill extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bill_model'); //load model reservasi
        $this->load->library('form_validation'); //load fom validation
    }

    public function index()
    {
        $data['title'] = "List Data Bill";

        $data['data_bill'] = $this->Bill_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('bill/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($bill_id)
    {
        $data['title'] = "Detail Data Resepsionis";

        $data['data_bill'] = $this->Bill_model->getById($bill_id);
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('bill/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Bill";

        $this->form_validation->set_rules('bill_id', 'BILL ID', 'trim|required|numeric');
        $this->form_validation->set_rules('room_type_id', 'ROOM TYPE ID', 'trim|required');
        $this->form_validation->set_rules('guest_id', 'GUEST ID', 'trim|required');
        $this->form_validation->set_rules('date', 'DATE', 'trim|required');
        $this->form_validation->set_rules('reservation_id', 'RESERVATION ID', 'trim|required');
        $this->form_validation->set_rules('receptionist_id', 'RECEPTIONIST ID', 'trim|required');
        $this->form_validation->set_rules('payment_id', 'PAYMENT ID', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('bill/add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'bill_id' => $this->input->post('bill_id'),
                'room_type_id' => $this->input->post('room_type_id'),
                'guest_id' => $this->input->post('guest_id'),
                'date' => $this->input->post('date'),
                'reservation_id' => $this->input->post('reservation_id'),
                'receptionist_id' => $this->input->post('receptionist_id'),
                'payment_id' => $this->input->post('payment_id'),
                "KEY" => "rahasia"
            ];

            $insert = $this->Bill_model->save($data);
            if ($insert['response_code'] === 201) {
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('bill');
            } elseif ($insert['response_code'] === 400) {
                $this->session->set_flashdata('message', 'Data Duplikat');
                redirect('bill');
            } else {
                $this->session->set_flashdata('message', 'Gagal!!');
                redirect('bill');
            }
        }
    }

    public function edit($bill_id)
    {
        $data['title'] = "Ubah Data Bill";
        $data['data_bill'] = $this->Bill_model->getById($bill_id);

        $this->form_validation->set_rules('bill_id', 'BILL ID', 'trim|required|numeric');
        $this->form_validation->set_rules('room_type_name', 'ROOM TYPE NAME', 'trim|required');
        $this->form_validation->set_rules('guest_name', 'GUEST NAME', 'trim|required');
        $this->form_validation->set_rules('date', 'DATE', 'trim|required');
        $this->form_validation->set_rules('name', 'RECEPTIONIST NAME', 'trim|required');
        $this->form_validation->set_rules('payment_name', 'PAYMENT NAME', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('bill/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'bill_id' => $this->input->post('bill_id'),
                'room_type_id' => $this->input->post('room_type_id'),
                'guest_id' => $this->input->post('guest_id'),
                'date' => $this->input->post('date'),
                'reservation_id' => $this->input->post('reservation_id'),
                'receptionist_id' => $this->input->post('receptionist_id'),
                'payment_id' => $this->input->post('payment_id'),
                "KEY" => "rahasia"
            ];

            $update = $this->Bill_model->edit($data);
            if ($update['response_code'] === 201) {
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('bill');
            } elseif ($update['response_code'] === 400) {
                $this->session->set_flashdata('message', 'Data Duplikat');
                redirect('bill');
            } else {
                $this->session->set_flashdata('message', 'Gagal!!');
                redirect('bill');
            }
        }
    }

    public function delete($bill_id)
    {
        $update = $this->Bill_model->delete($bill_id);
        if ($update['response_code'] === 200) {
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('bill');
        } else {
            $this->session->set_flashdata('message', 'Gagal!!');
            redirect('bill');
        }
    }
}
