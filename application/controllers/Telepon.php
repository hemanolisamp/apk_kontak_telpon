<?php

class Telepon extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Telepon_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Telepon';
        $data['telepon'] = $this->Telepon_model->getAllTelepon();
        if( $this->input->post('keyword') ) {
            $data['telepon'] = $this->Telepon_model->cariDataTelepon();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('telepon/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Telepon';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('telepon/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Telepon_model->tambahDataTelepon();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('telepon');
        }
    }

    public function hapus($id)
    {
        $this->Telepon_model->hapusDataTelepon($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('telepon');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Telepon';
        $data['telepon'] = $this->Telepon_model->getTeleponById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('telepon/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Telepon';
        $data['telepon'] = $this->Telepon_model->getTeleponById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('telepon/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Telepon_model->ubahDataTelepon();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('telepon');
        }
    }

}
