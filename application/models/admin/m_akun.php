<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_akun extends CI_Model {
	private $_table= 'tbl_kasir';
    protected $id  = 'id_kasir';
	public function getAkun()
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
		$this->db->set('tbl_kasir.delete', 'NOW()', FALSE);
        $this->db->update($this->_table, $data,array($this->id => $a));
		return TRUE;
	}
	public function update($data,$a)
	{
	   $this->db->set('tbl_kasir.update', 'NOW()', FALSE);
	   $this->db->update('tbl_kasir', $data,array($this->id => $a));
	   return TRUE;
	}

}
