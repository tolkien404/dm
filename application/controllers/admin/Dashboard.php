<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->general->cekAdminLogin();
		$this->load->model('admin/M_Dashboard','md');
		$this->load->helper("url");
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('text');
	}
	
	public function index()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/dashboard/v_dashboard', $data);	
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('Home');
	}

}

/* End of file c_adashboard.php */
/* Location: ./application/controllers/admin/c_adashboard.php */