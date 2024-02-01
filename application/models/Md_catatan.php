<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md_catatan extends CI_Model {
    public $table = 'note';

    function get_note() {
        $id_data = $this->session->userdata('id');
        $query = $this->db->get_where($this->table, array('id_pemilik' => $id_data));
        //query = mysqli_query($conn, "SELECT * FROM hutang WHERE id_pemilik = '$id_user'");
        return $query->result();
    }
    
    function insert_note($data)
    {
        $this->db->insert($this->table, $data);
        //echo $this->db->last_query(); exit;
    }

    function del_row($id_catatan)
    {
        $this->db->where('id_catatan', $id_catatan);
        $this->db->delete($this->table);
    }

    function get_selected($selected) 
    {
        $this->db->where('id_catatan', $selected);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    function update_note($selected, $set_data) 
    {
        $this->db->where('id_catatan', $selected);
        $this->db->update($this->table, $set_data);
    }
}