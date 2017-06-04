<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->model('admin');
		
		//$this->load->model('web_model');
	}
		public function index()
    { 
	if (!$this->session->userdata('login') == TRUE) 
	{
			redirect('login_admin');
		} else {
			$data['member'] = $this->admin->counte('t_member');
			$data['item'] = $this->admin->counte('t_item');
			$data['galeri'] = $this->admin->counte('t_galeri');
	$this->template->admin('admin/home', $data);
		} 
}
public function ganti_password()
    { 
	$this->template->admin('admin/ganti_pass');
		} 

}