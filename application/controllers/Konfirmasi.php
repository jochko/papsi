<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Controller {
	
	private $keranjang;
	function __construct() 
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('App');
		$this->load->model('admin');
		$this->load->helper('contact');

		$this->keranjang = $this->cart->contents();
		if (empty($this->keranjang)) {
			redirect(base_url()."home","refresh");
			die;
		}
	}

	public function index() 
	{
		$data['rekening'] = $this->admin->get_all('t_rekening')->result_array();
		$data['total'] = $this->cart->total();
		// print_r($data);
		// die;
		// echo "<pre>";
		// print_r($this->cart->contents());
		// echo "</pre>";
		$this->load->view('home/v_atas');
		$this->load->view('konfirmasi', $data);
		$this->load->view('home/v_footer');
		
	}

	public function finish()
	{
		if ($this->input->post()) {
			// echo "<pre>";
			// print_r($this->input->post());
			// echo "</pre>";
			// echo "<pre>";
			// print_r($this->cart->contents());
			// echo "</pre>";
			// echo "<pre>";
			// print_r($this->session->userdata('username'));
			// echo "</pre>";
			// echo $this->cart->total();
			// die;
			// CEK METODE PEMBAYARAN
			if ($this->input->post("metode") == 2) {
				$pesanan["uang_muka"] = 30/100*$this->cart->total();
			}
			else{
				$pesanan["uang_muka"] = $this->cart->total();
			}

			$username 				= $this->session->userdata('username');
			$pesanan["id_user"] 	= $this->session->userdata("id_user");
			$pesanan["id_rekening"] = $this->input->post("rekening", TRUE);
			$pesanan["nama_pembayar"] = $this->input->post('nama_pembayar', TRUE);
			// COUNT TRANSAKSI ID
			$pesanan["kode_pesan"] 	= $this->generate_kode_pesanan($username, count($this->App->get_all('t_pesanan')->result_array()));
			$pesanan["total"] 		= $this->cart->total();
			$pesanan["tgl_gunakan"] = $this->input->post('tgl_gunakan', TRUE);
			$pesanan["batas_bayar"] = date("Y-m-d h:i:s", strtotime("+1 day", strtotime(date("Y-m-d h:i:s"))));

			// INSERT TABLE t_pesanan
			$pesanan_id = $this->App->insert("t_pesanan", $pesanan);
			// INSERT TABLE t_pesanan_detail
			if (isset($this->keranjang) && is_array($this->keranjang) && !empty($this->keranjang)) {
				foreach ($this->keranjang as $key => $value) {
					$pesanan_detail[$key]["id_pesanan"] = $pesanan_id;
					$pesanan_detail[$key]["id_item"] = $value["id"];
					$pesanan_detail[$key]["qty"] = $value["qty"];
					$pesanan_detail[$key]["harga"] = $value["price"];
					$pesanan_detail[$key]["sub_total"] = $value["qty"] * $value["price"];
				}
				$this->db->insert_batch("t_pesanan_detail", $pesanan_detail);

			}
			// SET SESSION FLASHDATA FINISH PAGE
			$finish["username"] 	= $username;
			$finish["id_pesanan"] 	= $pesanan_id;
			$finish["kode_pesan"] 	= $pesanan["kode_pesan"];
			$finish["total_transaksi"] = $pesanan["total"];
			$finish["nominal"] 		= $pesanan["uang_muka"];
			// echo "<pre>";
			// print_r($finish);
			// echo "</pre>";
			$this->session->set_flashdata("finish", $finish);
			$this->sent_email($finish);
			// die;

			$this->load->view("home/v_atas");
			$this->load->view("v_finish_page", $finish);
			$this->load->view("home/v_footer");
		}
		else{
			redirect(base_url()."konfirmasi",'refresh');
		}

	}
    // TEMPORARY
	public function sent_email($data)
	{
		$view = $this->load->view('v_email', $data, TRUE);
		$mailgun['from'] 	= "noreply@mail.com";
		$mailgun['subject'] = "Pemesanan Paket Pariwisata";
		$mailgun['message'] = $view;
		$mailgun['email_to']= !empty($this->session->userdata("email")) ? $this->session->userdata("email") : 'samuelerwardi@gmail.com';


		$this->db->insert("t_trigger_mailgun", $mailgun);
		$ch = curl_init();                
		$url = base_url()."mailgun/index.php";
		curl_setopt($ch,CURLOPT_URL,$url);
		$result = curl_exec($ch);
	}

    public function generate_kode_pesanan($str, $id)
    {
    	return strtoupper(substr($str, 0, 3)).date("Ymd").($id+1);
    }
 
}
