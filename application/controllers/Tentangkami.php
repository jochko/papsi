<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tentangkami extends CI_Controller {

	
	public function index()
	{
      
        $this->load->view('home/v_atas');
        $this->load->view('v_tentangkami');
        $this->load->view('home/v_footer');
	}
}