<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	function __construct() {
	    parent::__construct();
	    $this->ci =& get_instance();

	    // VALIDATE LOGIN ADMIN
	    if (!$this->session->userdata('login')) 
	    {
	    	redirect('login_admin');
	    }
	}

	protected function print_r($value='')
	{
		echo "<pre>";
		print_r($value);
		echo "</pre>";
	}

}

?>