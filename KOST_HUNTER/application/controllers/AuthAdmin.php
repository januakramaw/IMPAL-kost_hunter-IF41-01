<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AuthAdmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email_admin', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password_admin', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Login Admin Kost Hunter";
            $this->load->view('templates/frontheader', $data);
            $this->load->view('auth/loginadmin');
            $this->load->view('templates/footer');
        } else {
            $this->_adminlogin();
        }
    }
    private function _adminlogin()
    {
        $email = $this->input->post('email_admin');
        $password = $this->input->post('password_admin');
        $as_admin = $this->db->get_where('as_admin', ['email_admin' => $email])->row_array();
        //querry code igniter (select*from admin where email==email )
        //admin ketemu
        if ($as_admin) {
            //jika adminnya aktif
            if ($as_admin['is_active'] == 1) {
                //cek password
                if (password_verify($password, $as_admin['password_admin'])) {
                    $data = [
                        'email_admin' => $as_admin['email_admin'],
                        'role_id_admin' => $as_admin['role_id_admin']
                    ];
                    $this->session->set_userdata($data);
                    //arahkan ke view admin atau admin (arah view selanjutnya)
                    redirect('berita/indexadmin');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password! </div>');
                    redirect('AuthAdmin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been active! </div>');
                redirect('AuthAdmin');
            }
        } else {
            //ga ketemu
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role ="alert">email is not registered!</div>');
            redirect('AuthAdmin');
        }
    }
    public function registrationadmin()
    {
        $data['judul'] = "RegistrationAdmin Kost Hunter";
        $this->load->view('templates/frontheader', $data);
        $this->form_validation->set_rules('name_admin', 'Name_admin', 'required|trim');
        $this->form_validation->set_rules('email_admin', 'Email_admin', 'required|trim|valid_email|is_unique[as_admin.email_admin]', [
            'is_unique' => 'this email already registered!'
        ]);
        $this->form_validation->set_rules(
            'password3',
            'Password',
            'required|trim|min_length[3]|matches[password4]',
            [
                'matches' => 'password doesnt match!',
                'min_length' => 'password too short!'
            ]
        );
        $this->form_validation->set_rules('password4', 'Password', 'required|trim|matches[password3]');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/registrationadmin');
            $this->load->view('templates/footer');
        } else {
            $data  = [
                'name_admin' => htmlspecialchars($this->input->post('name_admin', true)),
                'email_admin' => htmlspecialchars($this->input->post('email_admin', true)),
                'password_admin' => password_hash($this->input->post('password3'), PASSWORD_DEFAULT),
                'role_id_admin' => 1,
                'is_active' => 1,
            ];
            $this->db->insert('as_admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role ="alert">congratulation!your account has been  created. Please  login! </div>');
            redirect('authadmin');
        }
    }
}
