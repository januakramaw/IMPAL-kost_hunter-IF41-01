<?php

class Berita_model extends CI_model
{
    public function getAllBerita()
    {
        return $this->db->get('berita')->result_array();
    }

    public function tambahBerita()
    {
        $data = [
            "namahunian" => $this->input->post('namahunian', true),
            "FASILITAS" => $this->input->post('FASILITAS', true),
            "typehunian" => $this->input->post('typehunian', true)
        ];

        $this->db->insert('berita', $data);
    }

    public function hapusBerita($id_berita)
    {
        // $this->db->where('id_berita', $id_berita);
        $this->db->delete('berita', ['id_berita' => $id_berita]);
    }

    public function getBeritaByIdBerita($id_hunian)
    {
        return $this->db->get_where('berita', ['id_hunian' => $id_hunian])->row_array();
    }

    public function ubahBerita()
    {
        $data = [
            "namahunian" => $this->input->post('namahunian', true),
            "FASILITAS" => $this->input->post('FASILITAS', true),
            "typehunian" => $this->input->post('typehunian', true)
        ];

        $this->db->where('id_hunian', $this->input->post('id'));
        $this->db->update('berita', $data);
    }
}
