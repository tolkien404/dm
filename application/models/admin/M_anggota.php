<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Anggota extends CI_Model {
	public $id  = 'id_user';
	private $_table= 'tbl_user';


	public function getAnggota()
	{
		$this->db->order_by("id_user", "desc");

		$query = $this->db->get_where('tbl_user', array('delete' => NULL));
		return $query->result_array();

	}

	public function create($data)
	{

		$this->db->insert('tbl_user', $data);
		return TRUE;

	}

	public function delete($data, $a)
	{
		$this->db->set('tbl_user.delete', 'NOW()', FALSE);
		$this->db->update($this->_table, $data,array($this->id => $a));
		return TRUE;
	}

	public function getByAnggotaId($id)
	{
		$this->db->where('id_user', $id);
		$query = $this->db->get($this->_table, 1);
		if ($query->num_rows() == 1) {
			return $query->row_array();
		}
	}

	public function update($id)
	{
		$this->db->set('tbl_user.update', 'NOW()', FALSE);
		$this->db->where('id_user', $id);
		$this->db->update('tbl_user');
		$result = $this->db->affected_rows();
		return $result;
}
}

/* End of file m_kategori.php */
/* Location: ./application/models/admin/m_kategori.php */
?>
