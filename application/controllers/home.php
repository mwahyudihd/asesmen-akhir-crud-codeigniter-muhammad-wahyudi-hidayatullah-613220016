<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        if (isset($_SESSION['nm_panggilan']) == "") {
            $this->load->view('login-form');
        } else {
            redirect('home/dashboard');
        }
    }
    public function forget()
    {
        $this->load->view('forgot-password');
    }

    public function dashboard(){
        $this->load->view('dashboard');
    }

    public function validasi()
    {
        // load model user
        $this->load->model('md_users');

        $user = $this->input->post('nm_panggilan');
        $pass = $this->input->post('password');

        $hasil = $this->md_users->get_validasi($user, $pass);
        if ($hasil == true) {
            // login sukses (username/password cocok dg tabel)
            //echo "Sukses";
            $this->session->set_usersdata('nm_panggilan', $user);
            // $_SESSION['username'] = $user;
            $this->load->view('home/dashboard');
        } else {
            // login gagal
            $this->session->set_flashdata('salah', true);
            redirect('home');
        }
    }

    function logout()
    {
        session_destroy();
        redirect('home');
    }
}
