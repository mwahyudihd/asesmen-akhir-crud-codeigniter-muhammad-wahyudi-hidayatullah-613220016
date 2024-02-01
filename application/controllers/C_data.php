<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_data extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Md_users');
        $this->load->model('Md_hutang');
        $this->load->model('Md_catatan');
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
        $tgl_berhtg = $this->input->post('tg_hutang');
        $timestamp = $this->Md_hutang->timestamp_data();
        $data = array(
            'id_pemilik' => $id_pemilik,
            'nm_pemberi' => $nm_pemberi,
            'jumlah_htg' => $jml_hutang,
            'tgl_hutang' => $timestamp,
            'tg_hutang' => $tgl_berhtg

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

    public function dir_edit($selected_id)
    {
        $query_detail = $this->Md_hutang->get_data_detail($selected_id);
        $DATA = array('row_data' => $query_detail);
        $this->load->view('edit-data', $DATA);
    }
    public function set_edit()
    {
        $selected_id = $this->input->post('id_selected');
        $nama_pemberi = $this->input->post('pemberi');
        $jumlah = $this->input->post('jml_hutang');
        $tgl_br_htg = $this->input->post('tg_hutang');
        $lunas_pd = $this->input->post('tgl_lunas');
        if($lunas_pd != NULL){
            $arr_update = array
            (
                'nm_pemberi' => $nama_pemberi,
                'jumlah_htg' => $jumlah,
                'tgl_lunas' => $lunas_pd,
                'tg_hutang' => $tgl_br_htg
            );
        }else {
            $arr_update = array
            (
                'nm_pemberi' => $nama_pemberi,
                'jumlah_htg' => $jumlah,
                'tg_hutang' => $tgl_br_htg
            );
        }
        
        $this->Md_hutang->update_data($selected_id, $arr_update);
        redirect(site_url('C_index/data'));
    }

    public function register()
    {
        $username = $this->input->post('username');
        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $password = md5($this->input->post('pass'));
        $data = array(
            'id' => NULL,
            'username' => $username,
            'password' => $password,
            'nama' => $name,
            'alamat' => $address
        );
        $this->Md_users->create_user($data);
        $this->session->set_flashdata('success', true);
        redirect(site_url('C_index/'));
    }

    public function add_note()
    {
        $id_pemilik = $this->input->post('id_pemilik');
        $note = $this->input->post('noted');
        $data = array(
            'id_pemilik' => $id_pemilik,
            'catatan' => $note,
        );
        $this->Md_catatan->insert_note($data);
        redirect(site_url('C_index/notes'));
    }

    function clear_noted($id_catatan)
    {
        $this->Md_catatan->del_row($id_catatan);
        redirect(site_url('C_index/notes'));
    }

    public function noted_data($selected)
    {
        $query_select = $this->Md_catatan->get_selected($selected);
        $DATA = array('data' => $query_select);
        $this->load->view('edit-noted', $DATA);
    }

    public function set_update_note()
    {
        $selected = $this->input->post('id_catatan');
        $note = $this->input->post('noted');
        $set_data = array
        (
            'catatan' => $note
        );
        $this->Md_catatan->update_note($selected, $set_data);
        $this->session->set_flashdata('success', true);
        redirect(site_url('C_index/notes'));

    }
}