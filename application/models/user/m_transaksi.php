<?php
class m_transaksi extends ci_model
{
	var $table = 'v_penjualan';
	public function getOrder() 
	{
		$this->db->select('*');
	   // $this->db->join('tbl_kasir', 'tbl_penjualan.id_kasir = tbl_kasir.id_kasir', 'inner');
		$query = $this->db->get_where('v_penjualan', array('v_penjualan.delete' => NULL));
		return $query->result_array();
	}

	public function getById($id) {
		$this->db->where('id_penjualan', $id);
		$query = $this->db->get($this->table, 1);
		if ($query->num_rows() == 1) {
			return $query->row_array();
		}
	}
}