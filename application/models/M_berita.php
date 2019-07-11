<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_berita extends CI_Model
{
	private $_table = 'tbl_berita';
	protected $id  = 'id_berita';

	public function get_total()
	{
		$this->db->order_by("tanggal", "desc");

		return $this->db->count_all($this->_table, array('delete' => NULL));
	}

	public function getByBeritaId($id)
	{
			$results = array();
			$this->db->select('*');
	    $this->db->where('id_berita', $id);
	    $query = $this->db->get($this->_table);

			if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
	}

	public function get_current_page_records($limit, $offset)
	{
		$this->db->limit($limit, $offset);
		$this->db->order_by("tanggal", "desc");

		$query = $this->db->get($this->_table);

		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}

			return $data;
		}

		return false;
		// if ($query->num_rows() > 0) {
		// 	foreach ($query->result() as $row) {
		// 		$data[$row -> id] = $row -> id_berita;
		// 		$data[$row -> id] = $row -> judul;
		// 		$data[$row -> id] = $row -> gambar;

		// 	}
		// 	return $data;
		// }
		// return false;
	}
}
