<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	//Constructor to load library, module, model, or etc.
	function __construct() {
		parent::__construct();
		$this->load->model('model_user','mu');
	}
	//Index method (Default)
	function index(){
		$this->load->view('index');
	}
	function backup()
	{
		$this->load->dbutil();

		$prefs = array(
			'format'      => 'zip',
			'filename'    => 'dbdm.sql'
		);
		$backup =& $this->dbutil->backup($prefs);
		$db_name = 'dbdm_'. date("Y-m-d-H:i:s") .'.zip';
		$save = 'D:/'.$db_name;
		$this->load->helper('file');
		write_file($save, $backup);
		$this->load->helper('download');
		force_download($db_name, $backup);
	}
	// function restore(){
	// //hapus dulu database jika proses restore gagal.
	// $this->Edit_model->hapus_db();
	// //upload dulu filenya
	// $fupload = $_FILES['datafile'];
	//  $nama = $_FILES['datafile']['name'];
	// if(isset($fupload)){
	// $lokasi_file = $fupload['tmp_name'];
	// $direktori=”backupdb/$nama“;
	// move_uploaded_file($lokasi_file,”$direktori”);
	// }
	// //restore database
	// $isi_file=file_get_contents($direktori);
	// $string_query=rtrim($isi_file, “\n;” );
	// $array_query=explode(“;”, $string_query);
	// foreach($array_query as $query){
	// $this->db->query($query);
	// }
	// $data['page']=’restore’;
	// $this->load->view(‘home’,$data);
	// }
}
