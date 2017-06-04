<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends MY_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->model('admin');
		//$this->load->model('web_model');
	}
	public function index()
    { 
    	$pesanan_detail = array();

    	$pesanan = $this->admin->list_pesanan();
    	if (!empty($pesanan)) {
    		foreach ($pesanan as $key => $value) {
    			$pesanan[$key]["detail"] = $this->admin->list_pesanan_detail($value["id_pesanan"]);
    			$pesanan[$key]["pembayaran"] = $this->admin->get_pembayaran($value["id_pesanan"]);
    			// echo $this->db->last_query();
    		}
    	}
    	$data["pesanan"] = $pesanan;
    	// $this->print_r($pesanan);
    	// die;
    	
		$this->template->admin('admin/pesanan', $data);
	} 

	public function konfirmasi()
	{
		// $this->print_r($this->input->post());

		$kode_pesan = $this->input->post("kode_pesan", TRUE);
		$total_transaksi = $this->input->post("total", TRUE);

		$data["id_pesanan"] = $this->input->post("id_pesanan", TRUE);
		$data["nominal_uang_muka"] = $this->input->post("uang_muka", TRUE);
		$data["nominal_pelunasan"] = $this->input->post("pelunasan", TRUE);
		
		// IF TOTAL TRANSAKSI == DANA MASUK UANG MUKA + DANA MASUK PELUNASAN
		if ($total_transaksi == $data["nominal_uang_muka"] + $data["nominal_pelunasan"]) {
			// UPDATE STATUS DI TABLE t_pesanan
			$this->admin->update("t_pesanan",array("status"=>1) , array("id_pesanan"=>$data["id_pesanan"]));
			// echo $this->db->last_query();
		}
		// die;
		// INSERT TABLE t_pembayaran
		$this->admin->insert_pembayaran($data);
		$response["message"] = "Pemesanan Nomor : $kode_pesan Terkonfirmasi .";
		$response["css_class"] = "alert-success";
		$this->session->set_flashdata("response", $response);

		redirect(base_url()."pesanan",'refresh');
	}
}