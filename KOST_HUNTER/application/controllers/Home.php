<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Selamat Datang KOST HUNTER';
        $this->load->view('templates/frontheader', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
