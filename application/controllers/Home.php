<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    //Constructor to load library, module, model, or etc.
	function __construct() {
		parent::__construct();
        $this->load->model('M_home','mhome');
	}
    //Index method (Default)
	function index(){

        $config = [
            'per_page' => 3
        ];
        $data = array(
			'data' => $this->mhome->getBerita($config['per_page'], $this->uri->segment(3) ? $this->uri->segment(3) : 0)
        );
		$this->load->view('index',$data);
    }

	function backup()
	{
		$this->load->dbutil();

        $prefs = array(
            'format'      => 'zip',
            'filename'    => 'ukom2017_141510303.sql'
            );
        $backup =& $this->dbutil->backup($prefs);
        $db_name = 'ukom2017_141510303_'. date("Y-m-d-H:i:s") .'.zip';
        $save = 'D:/'.$db_name;
        $this->load->helper('file');
        write_file($save, $backup);
        $this->load->helper('download');
        force_download($db_name, $backup);
    }

}
