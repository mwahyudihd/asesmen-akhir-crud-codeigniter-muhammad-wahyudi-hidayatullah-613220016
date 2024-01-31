<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Index extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Md_users');
        $this->load->model('Md_hutang');
    }

    public function process_login() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $user = $this->Md_users->get_user_by_username($username);

        $query = $this->db->query('SELECT * FROM users WHERE username = ? AND password = ?', array($username, $password));
        $row = $query->row_array();


        if ($user && $user['password'] === $password) {
            $this->session->set_userdata('username', $username);
            $this->session->set_userdata('name', $user['nama']);
            $id_pemilik = $this->session->userdata('id');
            $data['hutang'] = $this->Md_hutang->getDataHutang($id_pemilik);
            $this->load->view('dashboard', $data);
            redirect('C_index/dashboard');
        } else {
            $this->session->set_flashdata('salah', true);
            redirect('C_index');
        }
    }

    public function index()
    {
        if (!isset($_SESSION['username'])) {
            $this->load->view('login-form');
        } else {
            $_SESSION['nama'];
            redirect('C_index/dashboard');
        }
    }
    public function forget()
    {
        $this->load->view('forgot-password');
    }

    public function dashboard(){
        $id_pemilik = $this->session->userdata('id');
        $data['hutang'] = $this->Md_hutang->getDataHutang($id_pemilik);
        $DATA = array('queryAllHutang' => $data);
        $this->load->view('dashboard', $DATA);
    }

    public function register(){
        $this->load->view('register');
    }


    function logout()
    {
        session_destroy();
        redirect('C_index');
    }
}
