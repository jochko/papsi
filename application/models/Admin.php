<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {
	function __construct() 
	{
		parent::__construct();
	}
	function insert($table='', $data='')
	{
		$this->db->insert($table, $data);
		
		return $this->db->insert_id();
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
	function counte($table='')
	{
		return $this->db->count_all($table);
	}

	// CUSTOM SQL
	public function list_pesanan()
	{
		$this->db->select("*, t_pesanan.status AS status");
		$this->db->from("t_pesanan");
		$this->db->join("t_rekening", "t_pesanan.id_rekening = t_rekening.id_rekening");
		$this->db->join("t_member", "t_pesanan.id_user = t_member.id_user");
		$this->db->order_by("t_pesanan.id_pesanan DESC");

		$result = $this->db->get()->result_array();
		return $result;
	}

	public function list_pesanan_detail($id)
	{
		$this->db->select("*");
		$this->db->from("t_pesanan");
		$this->db->join("t_pesanan_detail", "t_pesanan.id_pesanan = t_pesanan_detail.id_pesanan");
		$this->db->join("t_item", "t_pesanan_detail.id_item = t_item.id_item");
		$this->db->join("t_kategori", "t_item.id_kategori = t_kategori.id_kategori");
		$this->db->where(array("t_pesanan.id_pesanan"=>$id));
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function insert_pembayaran($data)
	{
		// DELETE DULU , LALU INSERT .
		$this->db->delete("t_pembayaran", array("id_pesanan"=>$data["id_pesanan"]));
		$this->db->insert("t_pembayaran", $data);
	}

	public function get_pembayaran($id)
	{
		$result = array();
		$this->db->select("*");
		$this->db->from("t_pembayaran");
		$this->db->where(array("id_pesanan"=>$id));
		$result = $this->db->get()->result_array();
		if (count($result)==1) {
			$result = $result[0];
		}
		
		return $result;
	}
}