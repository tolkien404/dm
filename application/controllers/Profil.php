<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function adart() {
		$this->load->view('v_adart');
	}

	public function sejarah() {
		$this->load->view('v_sejarah');
	}

	public function visimisi() {
		$this->load->view('v_visimisi');
	}

	public function peraturan() {
		$this->load->view('v_peraturan');
	}

	public function kepengurusan() {
		$this->load->view('v_kepengurusan');
	}

	public function programkerja() {
		$this->load->view('v_programkerja');
	}
}
