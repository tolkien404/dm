<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Model_user extends CI_Model {
    var $table = 'tbl_anggota';
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        }

    function checkLogin($username, $password) {
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $this->db->where('status', 'Aktif');
        $query = $this->db->get($this->table, 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    }
?>