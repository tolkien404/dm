<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_buku extends CI_Model {
	private $_table= 'tbl_buku';
    protected $id  = 'id_buku';
    
	public function getBuku()
	{
		$this->db->select('id_buku,kategori,judul,gambar,noisbn,penulis,penerbit, tahun, qty, harga_pokok, harga_jual, ppn, diskon');   
      	$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_buku.id_kategori', 'inner');
		$query = $this->db->get_where($this->_table ,array('tbl_buku.delete'=> NULL));
		return $query->result_array();			
	}

	public function insert($data)
	{
		$res = $this->db->insert($this->_table ,$data);
		return $res;
	}

	public function delete($data, $a)
	{
		$this->db->set('tbl_buku.delete', 'NOW()', FALSE);
        $this->db->update($this->_table, $data,array($this->id => $a));
		return TRUE;
	}

		public function update($data,$a)
	{
		$this->db->set('tbl_buku.update', 'NOW()', FALSE);
    	$this->db->update($this->_table , $data,array($this->id => $a));
		return TRUE;
	}
}