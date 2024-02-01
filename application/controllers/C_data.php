<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_data extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Md_users');
        $this->load->model('Md_hutang');
    }

    public function add() 
    {
        $this->load->view('add-data');
    }

    public function add_action()
    {
        $id_pemilik = $this->input->post('id_pemilik');
        $nm_pemberi = $this->input->post('pemberi');
        $jml_hutang = $this->input->post('jml_hutang');
        $timestamp = $this->Md_hutang->timestamp_data();
        $data = array(
            'id_pemilik' => $id_pemilik,
            'nm_pemberi' => $nm_pemberi,
            'jumlah_htg' => $jml_hutang,
            'tgl_hutang' => $timestamp

        );
        $this->Md_hutang->insertData($data);
        redirect(site_url('C_index/data'));
    }

    public function send_status($id_hutang)
    {
        $this->Md_hutang->update_status($id_hutang);
        redirect(site_url('C_index/data'));
    }
    
    function remove($id_hutang)
    {
        $this->Md_hutang->del_row($id_hutang);
        redirect(site_url('C_index/data'));
    }
}