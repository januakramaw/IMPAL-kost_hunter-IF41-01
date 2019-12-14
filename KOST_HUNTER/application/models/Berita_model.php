<?php

class Berita_model extends CI_model
{
    public function getAllBerita()
    {
        return $this->db->get('berita')->result_array();
    }

    public function tambahBerita()
    {
        $namahunian = $this->input->post('namahunian', true);
        $FASILITAS = $this->input->post('FASILITAS', true);
        $typehunian = $this->input->post('typehunian', true);
        $lokasi = $this->input->post('lokasi', true);
        $harga = $this->input->post('harga', true);
        $foto = $_FILES['foto'];
        if ($foto = '') { } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload gagal";
            } else {
                $foto = $this->upload->data('file_name');
            }
        }
        $data = array(
            'namahunian' => $namahunian,
            'FASILITAS' => $FASILITAS,
            'typehunian' => $typehunian,
            'lokasi' => $lokasi,
            'harga' => $harga,
            'foto' => $foto

        );
        $this->db->insert('berita', $data);
    }

    public function hapusBerita($id_hunian)
    {
        $this->db->where('id_hunian', $id_hunian);
        $this->db->delete('berita', ['id_hunian' => $id_hunian]);
    }
    public function getBeritaByIdHunian($id_hunian)
    {
        return $this->db->get_where('berita', ['id_hunian' => $id_hunian])->row_array();
    }

    public function ubahBerita()
    {
        $data = [
            "namahunian" => $this->input->post('namahunian', true),
            "FASILITAS" => $this->input->post('FASILITAS', true),
            "typehunian" => $this->input->post('typehunian', true),
            "lokasi" => $this->input->post('lokasi', true),
            "harga" => $this->input->post('harga', true)

        ];

        $this->db->where('id_hunian', $this->input->post('id'));
        $this->db->update('berita', $data);
    }
}
