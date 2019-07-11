<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->general->cekUserLogin();
		$this->load->model('user/M_Dashboard','md');
		$this->load->helper("url");
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('text');
	}

	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('user/dashboard/v_dashboard', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('nama_depan');
		$this->session->unset_userdata('nama_belakang');
		session_destroy();
		redirect('auth');
	}
}
