<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
    public function index(){
    }

    public function login(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == TRUE):
            $a_UserInfo['username'] = $this->input->post('username');
            $a_UserInfo['password'] = md5($this->input->post('password'));
            $a_UserChecking = $this->m_admin_authentication->a_fCheckUser( $a_UserInfo );
            if($a_UserChecking):
                $this->session->set_userdata('user', $a_UserChecking);
                redirect(base_url('index.php/control_backend'));
            else:
                $this->b_Check = FALSE;
            endif;
        endif;
    }
}