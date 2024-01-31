<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md_hutang extends CI_Model {

    function getDataHutang() {
        $query = $this->db->get_where('hutang', array('id_pemilik' => $id_pemilik));
        return $query->result();
    }
}