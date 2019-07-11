<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_pasok extends CI_Model {
  private $_table= 'tbl_pasok';
  protected $id  = 'id_pasok';

  public function getPasok() 
  {
    $this->db->select('a.*,b.*,c.*');
    $this->db->join('tbl_buku as a', 'a.id_buku = b.id_buku', 'inner');
    $this->db->join('tbl_distributor as c', 'c.id_distributor = b.id_distributor', 'left');
    $this->db->order_by('tanggal','desc');
    $query = $this->db->get_where('tbl_pasok as b',array('b.delete' => NULL));
    return $query->result_array();
  }

  public function insert($data) 
  {
    $res = $this->db->insert($this->_table ,$data);
    return $res;
  }

  public function update($data, $a) 
  {
    $this->db->set('tbl_pasok.update', 'NOW()', FALSE);
    $this->db->update($this->_table , $data,array($this->id => $a));
    return TRUE;
  }
}
