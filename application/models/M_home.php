<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_home extends CI_Model {
    
    public function getBerita($limit, $offset)
	{
        $query = 
        $this->db->order_by("create", "desc")
        ->select('*')
		->from('tbl_berita')
		->where('delete',NULL)
		->limit($limit, $offset)
		->get();
		return $query->result_array();
    }
    
}