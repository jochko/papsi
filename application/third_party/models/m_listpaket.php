<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_listpaket extends CI_Model {
	function __construct() 
	{
		parent::__construct();
	}
	function insert($table='', $data='')
	{
	$this->db->insert($table, $data);
	}
	function get_all($table)
	{
	$this->db->from($table);
	
	return $this->db->get();
	}
}