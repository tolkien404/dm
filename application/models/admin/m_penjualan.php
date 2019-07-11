<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_penjualan extends CI_Model {

	public function getTotalJSON($year) {
			// $sql = "SELECT total_pasok FROM v_totalpasok WHERE tahun = $year ORDER BY no_bulan";
		$this->db->where('tahun', $year);
		$this->db->select('jumlah_terjual');
		$this->db->order_by('index_bulan', 'asc');
		$res = $this->db->get('v_total_jual_buku')->result_array();
		$data = json_encode($res[0]['jumlah_terjual']);
		$hasil = preg_replace('/"([a-zA-Z]+[a-zA-Z0-9_]*)":/','$1:', $data);
		print $hasil;
	}
	
	public function getChartLabelJSON() {
		$sql = "SELECT DISTINCT bulan FROM v_totalpasok ORDER BY no_bulan ASC";
		$months = array();

		while($res = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			$months[] = $res['bulan'];
		}
		print json_encode($months);
	} 
	
	public function getTahun(){
		$tahun = array();
		$tahun_sekarang = date('Y');
		for ($i = 2017 ; $i <= ($tahun_sekarang + 5) ; $i++) { 
			$tahun[$i] = $i;
		}
		return $tahun;
	}

	public function getBulan(){
		$this->db->select('bulan');
		$this->db->order_by('no_bulan');
		$query = $this->db->get('v_totalpasok');
		return $query->result();
	}

	public function getTotal($year){
		$this->db->select('total_pasok');
		$this->db->order_by('no_bulan');
		$query = $this->db->get_where('v_totalpasok', array('tahun' => $year));;
		return $query->result();
	}
}
