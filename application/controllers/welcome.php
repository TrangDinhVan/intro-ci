<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function index(){
        if( $this->session->userdata('sess_user') ):
            $data['page_title'] = 'Khu vực quản trị';
            $this->load_template('admin/index', $data);
        else:
            $mes = null;
            if( $this->session->userdata('login') === 0 ):
                $mes = "Sai tên hoặc mật khẩu!!!";
            endif;
            $this->login_form($mes);
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
        $this->session->unset_userdata('login');
    }

    public function load_template( $name = '', $data = null ){
        $this->load->view('header', $data);
        $this->load->view($name, $data);
        $this->load->view('footer', $data);
    }
}