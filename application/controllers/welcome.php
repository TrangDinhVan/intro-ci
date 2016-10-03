<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function index(){
        if( $this->session->userdata('user') ):
            $data['page_title'] = 'Khu vực quản trị';
            $this->load_template('admin/index', $data);
        else:
            $this->login_form();
        endif;
	}
    public function login_form($mes = null){
        $data = array();
        $data['page_title'] = 'Đăng nhập - Intro Code Igniter';
        $data['mes'] = '';
        if( $mes ):
            $data['mes'] = $mes;
        endif;
        $this->load_template('authen/login-form', $data);
    }

    public function load_template( $name = '', $data = null ){
        $this->load->view('header', $data);
        $this->load->view($name, $data);
        $this->load->view('footer', $data);
    }
}