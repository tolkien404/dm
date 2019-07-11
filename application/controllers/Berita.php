<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','decode_ur', 'encode_url');
        $this->_module = 'v_berita';
        $this->load->library('pagination');
        $this->load->model('M_berita', 'mberita');
    }

    public function index()
    {
        // $parameter = $_REQUEST['id_berita'];
        $params = array();
        $limit_per_page = 4;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total_records = $this->mberita->get_total();

        if ($total_records > 0) {
            // get current page records
            $params["results"] = $this->mberita->get_current_page_records($limit_per_page, $page * $limit_per_page);
            // $config['suffix'] = '?'.http_build_query($_REQUEST, '', "&");
            $config['base_url'] = base_url() . 'Berita/index';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;

            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;

            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            $config['attributes'] = array('class' => 'page-link');

            $config['pagination'] = $this->pagination->create_links();
            $this->pagination->initialize($config);

            if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
            $config['first_url'] = $config['base_url'] . '?' . http_build_query($_GET);

            // build paging links
            $params["links"] = $this->pagination->create_links();
        }
        $this->load->view('v_berita', $params, $page);
    }


    public function detail()
    {
        $this->output->set_status_header('404');
        $id = $this->uri->segment('3');
        $data = array(
            'data' => $this->mberita->getByBeritaId($id)
        );
        $this->load->view('v_beritadetail', $data);
    }

    public function detail1()
    {
        $this->load->view('user/v_beritadetail1');
    }

    public function detail2()
    {
        $this->load->view('user/v_beritadetail2');
    }
}
