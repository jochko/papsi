<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Model {
	function __construct() 
	{
		parent::__construct();
	}
	function insert($table='', $data='')
	{
	$this->db->insert($table, $data);
	}
	
	function insert_last($table='', $data='')
	{
	$this->db->insert($table, $data);
	return $this->db->insert_id();
	}
	
	function get_all($table)
	{
	$this->db->from($table);
	
	return $this->db->get();
	}
	function get_where($table = null, $where = null)
	{
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}
	function update($table = null,$data = null, $where = null)
	{
		$this->db->update($table, $data, $where);
	}
	
}