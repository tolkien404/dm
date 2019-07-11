<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_distributor extends CI_Model {
	private $_table= 'tbl_distributor';
    protected $id  = 'id_distributor';

	public function getDistributor() 
	{
	   	$query = $this->db->get_where('tbl_distributor', array('delete' => NULL));
	   	return $query->result_array();
	}	

	public function insert($data)
	{

	   $this->db->insert($this->_table, $data);
	   return TRUE;

	}

	public function delete($data,$id)
	{
		$this->db->where('id_distributor',$id);
		$this->db->update('tbl_distributor',$data);
		return TRUE;
	}
	
	public function update($data,$id) 
	{
	   $this->db->where('id_distributor',$id);
	   $this->db->update('tbl_distributor',$data);
	   return TRUE;
	}
}