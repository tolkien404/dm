<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Anggota extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('user_agent');
		$this->load->library('form_validation');

		$this->general->cekAdminLogin();
		$this->load->helper(array('text', 'url', 'form'));
		$this->_module = 'admin';
		$this->load->model('admin/M_anggota', 'manggota');
	}

	public function index()
	{
		$data = array(
			'username' => $this->session->userdata('username'),
			'data' => $this->manggota->getAnggota()
		);
		$this->load->view($this->_module . '/anggota/v_anggota', $data);
	}

	public function edit($id)
	{
		$data = array(
      	'user' => $this->manggota->getByAnggotaId($id)
        );
		$this->load->view($this->_module . '/anggota/edit', $data);
	}

	public function ubah()
	{
		$id = $this->input->post('i-id_user', TRUE);
		$nama = $this->input->post('i-nama');
		$data = array(
			'username' => $this->session->userdata('username'),
		);
			$this->manggota->update($id, $nama, $data);
		redirect('admin/Anggota');
	}
//Post data
	public function post()
	{
		// $this->form_validation->set_rules('i-username', 'username', 'is_unique|username');
		// if ($this->form_validation->run() == FALSE) {
		$data = array(
			'username' => $this->session->userdata('username'),
			'anggota' => $this->manggota->getAnggota()
		);
		$this->load->view($this->_module . '/users/post', $data);
		// } else {
		// 	$this->load->view($this->_module . '/users/save');
		// }
	}
//Custom Function Validation
	// function nope_min_length($str, $val)
	// {
	// 	if (preg_match("/^[0-9]$/", $val)) {
	// 		return FALSE;
	// 	}
	// 	if (function_exists('mb_strlen')) {
	// 		if (mb_strlen($str) < $val) {
	// 			$this->form_validation->set_message('nope_min_length', '%s: minimum number of character is ' . $val);
	// 			return false;
	// 		} else {
	// 			return true;
	// 		}
	// 	}
	// 	if (strlen($str) < $val) {
	// 		$this->form_validation->set_message('nope_min_length', '%s: minimum number of character is ' . $val);
	// 		return false;
	// 	} else {
	// 		return true;
	// 	}
	// }
	//
	// function kelamin_check($post_string)
	// {
	// 	$this->form_validation->set_message('kelamin_check', 'You need to select something other than the default');
	// 	return $post_string == '0' ? false : true;
	// }
	//
	// function sosmed_check($post_string)
	// {
	// 	$this->form_validation->set_message('sosmed_check', 'You need to select something other than the default');
	// 	return $post_string == '0' ? false : true;
	// }


	public function save()
	{

		// $this->form_validation->set_rules('i-nama', 'Nama', 'trim|min_length[4]');
		// $this->form_validation->set_rules('i-sosial', 'Sosmed', 'required|trim|callback_sosmed_check');
		$this->form_validation->set_rules('i-username', 'Username', 'required|trim|is_unique[tbl_anggota.username]');
		$this->form_validation->set_rules('i-pass', 'Password', 'required|min_length[6]|max_length[20]');
		$this->form_validation->set_rules('i-id_user', 'Email', 'required|trim|is_unique[tbl_user.id_user]');

		// $this->form_validation->set_rules('i-angkatan', 'Angkatan', 'required|trim');
		// $this->form_validation->set_rules('i-telepon', 'Telepon', 'numeric|trim|callback_nope_min_length[11]');
		// $this->form_validation->set_rules('i-email', 'Email', 'required|trim|callback_email_check[30]|valid_email');
		// $this->form_validation->set_rules('i-alamat', 'Alamat', 'required|trim');
		// $this->form_validation->set_rules('i-kelamin', 'Kelamin', 'required|trim|callback_kelamin_check');

		if ($this->form_validation->run() != false)
		{
			$data = array(
				'id_anggota' => $this->input->post('i-id_anggota'),
				'id_user' => $this->input->post('i-id_user'),
				// 'nama' => $this->input->post('i-nama'),
				// 'kelamin' => $this->input->post('i-kelamin'),
				'username' => $this->input->post('i-username'),
				'password' => md5($this->input->post('i-pass')),
				// 'angkatan' => $this->input->post('i-angkatan'),
				// 'alamat' => $this->input->post('i-alamat'),
				// 'telepon' => $this->input->post('i-telepon'),
				// 'email' => $this->input->post('i-email'),
				// 'sos_aktif' => $this->input->post('i-sosial'),
				// 'sosmed' => $this->input->post('i-sosmed'),
				'status' => $this->input->post('i-status'),
				'akses' => $this->input->post('i-akses'),
				'create' => date('Y-m-d H:i:s')
			);

			$this->musers->insert($data);
			redirect('admin/Users');
		} else {
			$data = array(
				'username' => $this->session->userdata('username'),
				'anggota' => $this->manggota->getAnggota()
			);
			$this->load->view($this->_module . '/users/post', $data);
		}
	}

	public function remove()
	{
		$id = $this->uri->segment(4);
		$data = array(
			'id_user' => $this->uri->segment(4),
			'delete' => date('Y-m-d H:i:s')
		);
		$this->manggota->delete($data, $id);
		redirect('admin/Users');
	}
}
