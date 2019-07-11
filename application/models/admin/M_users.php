<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_users extends CI_Model {
	private $_table= 'tbl_anggota';
	protected $id  = 'id_anggota';

	public function getUser()
	{
		$this->db->select('id_anggota, username, password, status, akses, nama, kelamin, tempat_lahir, tgl_lahir, prov_domisili, alamat, status_nikah, angkatan, pend_terakhir, jurusan, peng_organisasi, peng_organisasil, tlpn, email, sos_aktif, facebook, instagram, twitter, val_kerja, status_kerja, tempat_kerja ');
		$this->db->join('tbl_user', 'tbl_user.id_user = tbl_anggota.id_user', 'inner');
		$this->db->order_by("id_anggota", "desc");
		$query = $this->db->get_where($this->_table, array('tbl_anggota.delete' => NULL));
		return $query->result_array();
	}

	public function insert($data)
	{
		$this->db->insert($this->_table ,$data);
		return TRUE;
	}
	public function delete($data, $a)
	{
		$this->db->set('tbl_anggota.delete', 'NOW()', FALSE);
		$this->db->update($this->_table, $data,array($this->id => $a));
		return TRUE;
	}
	public function update($data,$a)
	{
		$this->db->set('tbl_anggota.update', 'NOW()', FALSE);
		$this->db->where('id_anggota',$a);
		$this->db->update('tbl_anggota', $data,array($this->id => $a));
		return TRUE;
	}
}
