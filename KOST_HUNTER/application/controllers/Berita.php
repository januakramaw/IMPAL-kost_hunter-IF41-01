<?php

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Berita XDA";
        $data['berita'] = $this->Berita_model->getAllBerita();
        $this->load->view('templates/frontheader', $data);
        $this->load->view('berita/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Upload iklan';

        $this->form_validation->set_rules('namahunian', 'Nama Hunian', 'required');
        $this->form_validation->set_rules('FASILITAS', 'Fasilitas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/frontheader', $data);
            $this->load->view('berita/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Berita_model->tambahBerita();
            $this->session->set_flashdata('flash', 'berhasil di upload');
            redirect('berita');
        }
    }

    public function hapus($id_berita)
    {
        $this->Berita_model->hapusBerita($id_berita);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('berita');
    }

    public function detail($id_berita)
    {
        $data['judul'] = 'Detail Berita';
        $data['berita'] = $this->Berita_model->getBeritaByIdBerita($id_berita);
        $this->load->view('templates/frontheader', $data);
        $this->load->view('berita/detail', $data);
        $this->load->view('templates/footer');

        // $this->Berita_model->hapusBerita($id_berita);
        // $this->session->set_flashdata('flash', 'Dihapus');
        // redirect('berita');
    }

    public function ubah($id_hunian)
    {
        $data['judul'] = 'Form Ubah Berita';
        $data['berita'] = $this->Berita_model->getBeritaByIdBerita($id_hunian);
        $data['typehunian'] = ['KOST', 'KONTRAKAN'];

        $this->form_validation->set_rules('namahunian', 'Nama Hunian', 'required');
        $this->form_validation->set_rules('FASILITAS', 'Fasilitas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/frontheader', $data);
            $this->load->view('berita/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Berita_model->ubahBerita($id_hunian);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('berita');
        }
    }
}
