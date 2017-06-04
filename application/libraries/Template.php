<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Template{
	function __construct()
	{
		$this->ci =&get_instance();
	}

	function admin($template, $data='')
	{
		$data['content'] = $this->ci->load->view($template, $data, TRUE);
		$data['nav'] = $this->ci->load->view('admin/nav', $data, TRUE);

		$this->ci->load->view('admin/dashboard', $data);
	}
	function operator($template, $data='')
	{
		$data['content'] = $this->ci->load->view($template, $data, TRUE);
		$data['navop'] = $this->ci->load->view('operator/navop', $data, TRUE);

		$this->ci->load->view('operator/dashboardop', $data);
	}
}
