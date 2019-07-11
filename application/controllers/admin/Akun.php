<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Akun extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->general->cekAdminLogin();
		$this->load->helper('text');
		$this->_module='admin';

		$this->load->model('admin/m_akun','makun');
	}
	
	public function index()
	{
		$data = array(
			'username' => $this->session->userdata('username'),
			'data' => $this->makun->getAkun()
			);
		$this->load->view($this->_module.'/akun/v_akun',$data);
	}
	public function ubah() {
		$id = $this->input->post('i-id_kasir');
		$data = array(
			'id_kasir' => $this->input->post('i-id_kasir'),
			'nama' => $this->input->post('i-nama'),
			'username' => $this->input->post('i-username'),
			'alamat' => $this->input->post('i-alamat'),
			'akses' => $this->input->post('i-akses'),
			'update' => date('Y-m-d H:i:s')
			);
		$this->makun->update($data,$id);
		redirect('admin/akun');
	}
	public function post()
	{
		$data = array(
			'username' => $this->session->userdata('username'),
			'akun' => $this->makun->getAkun()
			);
		$this->load->view($this->_module.'/akun/post', $data);
	}
	public function tambah()
	{
		$data = array(
			'id_kasir' => $this->input->post(''),
			'nama' => $this->input->post('i-nama'),
			'username' => $this->input->post('i-username'),
			'password' => md5($this->input->post('i-password')),
			'telepon' => ($this->input->post('i-telepon')),
			'alamat' => $this->input->post('i-alamat'),
			'status' => ($this->input->post('i-status')),
			'akses' => $this->input->post('i-akses'),
			'create' => date('Y-m-d H:i:s')
			);
		$this->makun->insert($data);
		redirect('admin/akun');
	}
	public function hapus()
	{
		$id = $this->uri->segment(4);
		$this->makun->delete($data, $id);
		redirect('admin/akun');
	}
}