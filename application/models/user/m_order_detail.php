<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_order_detail extends CI_Model {

	var $table = 'tbl_penjualan_detail';

	public function getByOrderId($orderId) 
	{
		$this->db->select('*');
		$this->db->join('tbl_buku', 'tbl_penjualan_detail.id_buku = tbl_buku.id_buku', 'inner');
	    $this->db->where('id_penjualan', $orderId);
	    $this->db->order_by('id_penjualan_detail', 'DESC');
	    $query = $this->db->get($this->table);
	    if ($query->num_rows() > 0) {
	        return $query->result_array();
	    }
	}


}

