<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if ( ! function_exists('get_contact'))

{

    function get_contact()
    {
    	$CI = get_instance();
    	$CI->load->model('App');
    	return $CI->App->get_all("t_kontak")->result_array()[0];
    }
}