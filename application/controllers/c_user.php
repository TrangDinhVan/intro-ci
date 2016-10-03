<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_User extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model(array('m_user'));
    }

    public function index(){
    }

    public function login(){
        $user_info['login_name'] = $this->input->post('login_name');
        $user_info['password'] = md5($this->input->post('password'));
        $login_user = $this->m_user->checkUser($user_info);
        if($login_user):
            $this->session->set_userdata('sess_user', $login_user);
        endif;
        redirect(base_url('index.php/welcome'));
    }

    public function logout(){
        $this->session->unset_userdata('sess_user');
        redirect(base_url('index.php/welcome'));
    }
}