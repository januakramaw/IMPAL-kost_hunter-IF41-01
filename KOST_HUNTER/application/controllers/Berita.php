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
        $data['judul'] = "iklan kost hunter";
        $data['berita'] = $this->Berita_model->getAllBerita();
        $this->load->view('templates/header', $data);
        $this->load->view('berita/index', $data);
        $this->load->view('templates/footer');
    }
    public function indexadmin()
    {
        $data['judul'] = "iklan kost hunter";
        $data['berita'] = $this->Berita_model->getAllBerita();
        $this->load->view('templates/headeradmin', $data);
        $this->load->view('berita/indexadmin', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Upload iklan';
        $this->form_validation->set_rules('namahunian', 'Nama Hunian', 'required');
        $this->form_validation->set_rules('FASILITAS', 'Fasilitas', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/headeradmin', $data);
            $this->load->view('berita/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Berita_model->tambahBerita();
            $this->session->set_flashdata('flash', 'berhasil di upload');
            redirect('berita/indexadmin');
        }
    }

    public function hapus($id_hunian)
    {
        $this->Berita_model->hapusBerita($id_hunian);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('berita/indexadmin');
    }

    public function detail($id_hunian)
    {
        $data['judul'] = 'Detail Iklan';
        //manggil method getberita
        $data['berita'] = $this->Berita_model->getBeritaByIdHunian($id_hunian);
        $this->load->view('templates/header', $data);
        $this->load->view('berita/detail', $data);
        $this->load->view('templates/footer');
    }
    public function detailadmin($id_hunian)
    {
        $data['judul'] = 'Detail Iklan';
        //manggil method getberita
        $data['berita'] = $this->Berita_model->getBeritaByIdHunian($id_hunian);
        $this->load->view('templates/headeradmin', $data);
        $this->load->view('berita/detailadmin', $data);
        $this->load->view('templates/footer');
    }

    public function ubahadmin($id_hunian)
    {
        $data['judul'] = 'Form Ubah Berita';
        $data['berita'] = $this->Berita_model->getBeritaByIdHunian($id_hunian);
        $data['typehunian'] = ['Kost', 'Kontrakan'];

        $this->form_validation->set_rules('namahunian', 'Nama Hunian', 'required');
        $this->form_validation->set_rules('FASILITAS', 'Fasilitas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/headeradmin', $data);
            $this->load->view('berita/ubahadmin', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Berita_model->ubahBerita($id_hunian);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('berita/indexadmin');
        }
    }
}
