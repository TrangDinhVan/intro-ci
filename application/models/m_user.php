<?php
class M_User extends CI_Model
{
    private $_name = 'user';

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function check(){
        $query = $this->db->get($this->name);
        return $query->result();
    }

    function checkUser( $user_info ){
        $user
            = $this->db->select()
            ->where('login_name', $user_info['login_name'])
            ->where('password', $user_info['password'])
            ->get($this->_name)->row_array();

        if( count($user) > 0 ):
            return $user;
        else:
            return false;
        endif;
    }

} ?>