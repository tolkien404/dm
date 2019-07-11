<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_kategori extends CI_Model {
	private $_table = 'tbl_kategori';
	protected $id  = 'id_kategori';
	public function getKategori()
	{
		$query = $this->db->get_where($this->_table ,array('delete'  => NULL));
		return $query->result_array();			
	}

	public function insert ($data)
	{
		$res = $this->db->insert($this->_table ,$data);
		return $res;
    }

	public function update($data,$a) 
	{
	   $this->db->set('tbl_kategori.update', 'NOW()', FALSE);
	   $this->db->update($this->_table, $data,array($this->id => $a));
	   return TRUE;
	}
	
	public function delete($data,$a)
	{
		$this->db->set('tbl_kategori.delete', 'NOW()', FALSE);
		$this->db->update($this->_table, $data,array($this->id => $a));
		return TRUE;
	}
}