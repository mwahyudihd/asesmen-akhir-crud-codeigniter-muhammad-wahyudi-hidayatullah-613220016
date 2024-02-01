<?php
class Md_users extends CI_Model
{
    public function __construct() {
        $this->load->database();
    }

    public function get_user_by_username($username) {
        $query = $this->db->get_where('users', array('username' => $username));
        return $query->row_array();
    }
    

    public function create_user($data) {
        return $this->db->insert('users', $data);
    }
}