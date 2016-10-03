<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function index(){
		$data = array();
		$data['page_title'] = 'Đăng nhập - Intro Code Igniter';
		$this->load->view('header', $data);
		$this->load->view('authen/login-form', $data);
		$this->load->view('footer', $data);
	}
}