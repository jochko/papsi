<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin');
	}
		public function index()
    { 
	if ($this->input->post('submit') == 'Submit') 
	{
		$username = $this->input->post('username', TRUE);
		$password = md5($this->input->post('password', TRUE));
		
		$cek = $this->admin->get_where('t_admin',array('username' => $username));
		
		if ($cek->num_rows() > 0){
			$data = $cek->row();
			if (password_verify($password, $data->password));
			{
				$datauser = array(
				'user' => $data->fullname,
				'level' => $data->level,
				'login' => TRUE
				);
				
				$this->session->set_userdata($datauser);
				
				redirect('administrator');
			
			}
		
		}
			
	}
	if ($this->session->set_userdata('level') == 'admin') 
	{
					
				redirect('administrator');
	} else
	if ($this->session->set_userdata('level') == 'operator') 
	{
					
				redirect('operator');
	}
	$this->load->view('admin/login');
	//echo password_hash('admin', PASSWORD_DEFAULT,['cost']));
	} 
	public function logout()
	{
	$this->session->sess_destroy();
	redirect('login_admin');
	}
}