<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function index(){
        $this->login_form();
	}
    public function login_form($mes = null){
        $data = array();
        $data['page_title'] = 'Đăng nhập - Intro Code Igniter';
        $data['mes'] = '';
        if( $mes ):
            $data['mes'] = $mes;
        endif;
        $this->load->view('header', $data);
        $this->load->view('authen/login-form', $data);
        $this->load->view('footer', $data);
    }
}