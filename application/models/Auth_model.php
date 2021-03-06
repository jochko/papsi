<?php if (!defined('BASEPATH'))exit('No direct script allowed');

class Auth_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }

	function login($username,$password){
		$this->db->where("username",$username);
		$this->db->where("password",$password);
		$query=$this->db->get("t_member");
		if($query->num_rows()>0){
			foreach($query->result() as $rows){
				$newdata = array(
						'id_user'	=> $rows->id_user,
						'username'	=> $rows->username,
						'email'		=> $rows->email,
						'logged_in'	=> TRUE
					);
			}
			$this->session->set_userdata($newdata);
			return true;
		}
		return false;
	}
	function cek_login($table,$where){     
        return $this->db->get_where($table,$where);
    }  

}