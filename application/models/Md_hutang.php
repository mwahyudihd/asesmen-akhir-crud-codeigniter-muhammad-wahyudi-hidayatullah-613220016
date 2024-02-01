<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
//$id_user = $_SESSION['id'];

class Md_hutang extends CI_Model {
    public $table = 'hutang';

    function getDataHutang() {
        $id_data = $this->session->userdata('id');
        $query = $this->db->get_where($this->table, array('id_pemilik' => $id_data));
        //query = mysqli_query($conn, "SELECT * FROM hutang WHERE id_pemilik = '$id_user'");
        return $query->result();
    }

    public function timestamp_data() 
    {
        return date('Y-m-d H:i:s');
    }

    public function date_time()
    {
        $datestring = '%d-%m-%y';
        $time = time();
        return strftime($datestring, $time);
    }

    function insertData($data)
    {
        $this->db->insert($this->table, $data);
        //echo $this->db->last_query(); exit;
    }

    function update_status($id_hutang)
    {
        $current_time = $this->timestamp_data();
        $data = array
        (
            'status' => 'lunas',
            'tgl_lunas' => $current_time
        );
        $this->db->where('id_hutang', $id_hutang);
        $this->db->update($this->table, $data);
    }

    function del_row($id_hutang)
    {
        $this->db->where('id_hutang', $id_hutang);
        $this->db->delete($this->table);
    }


    function get_data_detail($selected_id) 
    {
        $this->db->where('id_hutang', $selected_id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    
    function update_data($selected_id, $arr_update) 
    {
        $this->db->where('id_hutang', $selected_id);
        $this->db->update($this->table, $arr_update);
    }
}