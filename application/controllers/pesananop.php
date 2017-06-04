<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesananop extends CI_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->model('admin');
		//$this->load->model('web_model');
	}
		public function index()
    { 
		$this->template->operator('operator/pesananop');
	} 
}