<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->model('admin');
		//$this->load->model('web_model');
	}
		public function index()
    { 
	$data['data'] = $this->admin->get_all('t_member');
	$this->template->admin('admin/managemen_member', $data);
	}
	public function status()
    { 
	if (!is_numeric($this->uri->segmen(3)) || !is_numeric($this->uri->segmen(4)))
	{
		redirect('member');
	}
	$this->admin->update('t_member', array('status' => $this->uri->segment(3)), array('id_user' => $this->uri->segment(4)));

	redirect('member');
	} 
	}