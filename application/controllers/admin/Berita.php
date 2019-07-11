<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Berita extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->general->cekAdminLogin();
		$this->load->helper('text','form','url');
		$this->_module='admin';
		$this->load->model('admin/M_berita','mberita');
	}

	public function index()
	{
		$data = array(
			'username' => $this->session->userdata('username'),
			'data' => $this->mberita->getBerita()
		);
		$this->load->view($this->_module.'/berita/v_berita',$data);
	}

	public function post()
	{
		$data = array(
			'username' => $this->session->userdata('username'),
			'berita' => $this->mberita->getBerita()
		);
		$this->load->view($this->_module.'/berita/post', $data);
	}

	public function save()
	{
		//Upload properties
		$upload_path = './assets/uploads/berita';
		$nmfile = "file_".time();
		$config['upload_path'] = $upload_path;
		$config['file_name'] = $nmfile;
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|JPG|PNG';
		$config['max_size'] = '3072'; //maksimum besar file 3M
		$config['max_width']  = '5000'; //lebar maksimum 5000 px
		$config['max_height']  = '5000'; //tinggi maksimu 5000 px

		$this->load->library('upload', $config);


		$this->upload->initialize($config);
		if($_FILES['filefoto']['name'])
		{
			if (!$this->upload->do_upload('filefoto')){
				echo "data ga masuk";
			}

			$gbr = $this->upload->data();
			$data = array(
				'id_berita' => $this->input->post('i-id-berita'),
				'judul' => $this->input->post('i-judul'),
				'gambar' => $gbr['file_name'],
				'deskripsi' => $this->input->post('i-deskripsi'),
				'tanggal' => date('Y-m-d H:i:s'),
				'create' => date('Y-m-d H:i:s')
			);
			//Resize picture
			$config['image_library'] = 'gd2';
			$gbr['full_path'];
			$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			$config['new_image'] = $this->upload->upload_path.$this->upload->file_name;
			$config['maintain_ratio'] = TRUE;
			$config['create_thumb'] = FALSE;
			$config['width'] = 750;
			$config['height'] = 500;
			$this->load->library('image_lib', $config);

			$this->image_lib->clear();
			$this->image_lib->initialize($config);

			if ( !$this->image_lib->resize()){
				$this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));
			}

			$this->mberita->insert($data);


			$this->session->set_flashdata('pesan', "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
			redirect('admin/berita'); //jika berhasil maka akan ditampilkan view upload
		}
	}
}
