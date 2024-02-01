<?php
class Md_users extends CI_Model
{
    public $table = 'users';

    public function __construct() {
        $this->load->database();
    }

    public function get_user_by_username($username) {
        $query = $this->db->get_where($this->table, array('username' => $username));
        return $query->row_array();
    }

    public function query_users()
    {
        $id_admin = $this->session->userdata('id');
        $query_user = $this->db->get_where($this->table, array('id !=' => $id_admin));
        return $query_user->result();
    }    
    

    public function create_user($data) {
        return $this->db->insert($this->table, $data);
    }

    function del_row($id_user)
    {
        $this->db->where('id', $id_user);
        $this->db->delete($this->table);
    }
}