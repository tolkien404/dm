<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acara extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('v_acara');
    }

    public function detail() {
        $this->load->view('v_acaradetail');
    }
}
