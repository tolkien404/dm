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
		$this->load->view('user/acara.php');
	}   
	
}
