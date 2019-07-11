<?php
class Users extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_user','User');
    }
    function login() {

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->User->checkLogin($username, $password);
            if (!empty($user)) {
                $sessionData['id_anggota'] = $user['id_anggota'];
                $sessionData['username'] = $user['username'];
                $sessionData['nama'] = $user['nama'];
                $sessionData['akses'] = $user['akses'];
                $sessionData['is_login'] = TRUE;

                $this->session->set_userdata($sessionData);

                if ($this->session->userdata('akses') == 'Admin') {
                    $this->session->sess_expiration = 14400;
                    redirect('admin/Dashboard');
                } else if ($this->session->userdata('akses') == 'User'){
                    $this->session->sess_expiration = 14400;
                    redirect('user/Dashboard');
                }   else{
                    echo "<script>
                    alert('Kamu Jones');
                </script>";
                }
            }else{
                echo "<script>
                alert('Username/Password Salah atau Akun tidak aktif');
            </script>";
        }
    }
    $this->load->view('v_login');
}
function logout() {
    $this->session->sess_destroy();
    redirect('Home');
}
}

