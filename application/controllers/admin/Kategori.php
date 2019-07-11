<?php 
class Kategori extends CI_Controller{
  public function __construct() {
    parent::__construct();
    $this->load->library('session');
    $this->general->cekAdminLogin();
    $data['username'] = $this->session->userdata('username');
    $this->load->helper('text');
    $this->_module='admin';
    $this->load->model('admin/m_kategori','mkategori');
  }

  public function index()
  {
    $data = array(
      'username' => $this->session->userdata('username'),
      'data' => $this->mkategori->getKategori());
    $this->load->view($this->_module.'/kategori/v_kategori',$data);
  }

  public function post()
  {
    $data=array(
      'username' => $this->session->userdata('username')
      );            
    $this->load->view($this->_module.'/kategori/post', $data);  
  }

  public function tambah()
  {
    $data=array(
      'kategori' => $this->input->post('i-kategori'),
      'create' =>  date("Y-m-d h:i:s")
      );
    $this->mkategori->insert($data);
    redirect('admin/kategori');
  }
  
  public function ubah() {
    $id = $this->input->post('i-id_kategori');
    $data = array(
      'id_kategori' => $this->input->post('i-id_kategori'),
      'kategori' => $this->input->post('i-kategori'),
      );
    $this->mkategori->update($data,$id);
    redirect('admin/Kategori');
  }

  public function hapus() 
  {
    $id = $this->uri->segment(4);
    $this->mkategori->delete($data, $id);
    redirect('admin/Kategori');
  }
}
