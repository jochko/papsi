<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library(array('session', 'form_validation'));
		$this->load->model(array('auth_model', 'App'));
	}
	public function index()
	{
			$data['data'] = $this->App->get_all('t_kategori');
		$this->load->view('home/v_home');
		$this->load->view('home/v_atas', $data);
		$this->load->view('home/v_slider');
		$this->load->view('home/v_isi');
		$this->load->view('home/v_footer');
	}
	
	public function kategori($params = NULL)
	{
		if ($params !== NULL && is_numeric($params)) {
			$data['data'] = $this->App->get_where("t_item", array("id_kategori"=>$params));
		}
		else{
			$data['data'] = $this->App->get_all('t_item');
		}

		$this->load->view('home/v_atas');
		$this->load->view('item', $data);
		$this->load->view('home/v_footer');
	}
}