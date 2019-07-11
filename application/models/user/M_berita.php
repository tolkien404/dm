<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_berita extends CI_Model {
	private $_table= 'tbl_berita';
	protected $id  = 'id_berita';
	
	public function getBerita()
	{
		$query = $this->db->get_where($this->_table, array('delete' => NULL));
		return $query->result_array();
	}
	
    public function insert($data)
	{
        $res = $this->db->insert($this->_table ,$data);
		return $res;
	}
	public function delete($data, $a)
	{
		$this->db->set('tbl_berita.delete', 'NOW()', FALSE);
        $this->db->update($this->_table, $data,array($this->id => $a));
		return TRUE;
	}
	public function update($data,$a)
	{
	   $this->db->set('tbl_berita.update', 'NOW()', FALSE);
	   $this->db->update('tbl_berita', $data,array($this->id => $a));
	   return TRUE;
	}
}