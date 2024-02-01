<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Index extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Md_users');
        $this->load->model('Md_hutang');
        $this->load->model('Md_catatan');
    }

    public function process_login() 
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $user = $this->Md_users->get_user_by_username($username);

        $query = $this->db->query('SELECT * FROM users WHERE username = ? AND password = ?', array($username, $password));
        $row = $query->row_array();


        if ($user && $user['password'] === $password) 
        {
            $this->session->set_userdata('username', $username);
            $this->session->set_userdata('name', $user['nama']);
            $this->session->set_userdata('id', $user['id']);
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

    public function dashboard()
    {
        $dat['time_data'] = $this->Md_hutang->date_time();
        $queryAllHutang = $this->Md_hutang->getDataHutang();
        $DATA = array('queryAllHutang' => $queryAllHutang);
        $this->load->view('dashboard', $DATA + $dat);
    }

    public function register()
    {
        $this->load->view('register');
    }

    public function new()
    {
        $this->load->view('add-data');
    }

    public function data()
    {
        $queryAllHutang = $this->Md_hutang->getDataHutang();
        $DATA = array('queryAllHutang' => $queryAllHutang);
        $this->load->view('table', $DATA);
    }

    function logout()
    {
        session_destroy();
        redirect('C_index');
    }
    
    public function notes()
    {
        $query_note = $this->Md_catatan->get_note();
        $data = array('is_noted' => $query_note);
        $this->load->view('note', $data);
    }

    public function user_manager()
    {
        $queryAllUser = $this->Md_users->query_users();
        $data = array('queryAllUser' => $queryAllUser);
        $this->load->view('manage-user', $data);
    }

    function del_user($id_user)
    {
        $this->Md_users->del_row($id_user);
        $this->session->set_flashdata('success', true);
        redirect(site_url('C_index/user_manager'));
    }


    function new_note()
    {
        $this->load->view('note-form');
    }
}
