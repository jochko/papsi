<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('App');
	}
	
	public function index()
	{ 
		$this->load->view('home/v_atas');
		$this->load->view('cart');
		$this->load->view('home/v_footer');
	} 

	public function add()
	{

		if(is_numeric($this->uri->segment(3)))
		{
			$id = $this->uri->segment(3);
			$get = $this->App->get_where('t_item', array('id_item' => $id))->row();
			
			$data = array('id' => $get->id_item,
							'name' => $get->nama,
							'price' => $get->harga,
							'qty' => 1);
			$this->cart->insert($data);
			redirect(base_url()."cart");
		}
	}

	public function Update()
	{
		if ($this->uri->segment(3))
		
			$this->load->library('form_validation');
			$this->form_validation->set_rules('qty','Jumlah Pesanan','required|numeric');
			if ($this->form_validation->run() == TRUE)
			{
			$data = array(
			'qty' => $this->input->post('qty', TRUE),
			'rowid' => $this->uri->segment(3)
			);
			$this->cart->update($data);
			redirect('cart');
			}else{
				$this->load->view('home/v_atas');
				$this->load->view('cart');
				$this->load->view('home/v_footer');

			}
	}

	public function delete()
	{
		if ($this->uri->segment(3))
		{
			$rowid = $this->uri->segment(3);
			
			$this->cart->remove($rowid);
			redirect('cart');
		}

	}
}