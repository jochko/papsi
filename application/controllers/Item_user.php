<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class item_user extends CI_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->library (array('cart', 'form_validation'));
		$this->load->model('App');
	}
		public function index()
    { 
		$data['data'] = $this->App->get_all('t_item');
		$this->load->view('home/v_atas');
        $this->load->view('item', $data);
        $this->load->view('home/v_footer');
	} 
		public function detail_user($value='')
	{
		if(is_numeric($this->uri->segment(3)));
		{
			
			$id = $this->uri->segment(3);
			$data['data'] = $this->App->get_where('t_item', array('id_item' => $id));
			$this->load->view('home/v_atas');
			$this->load->view('detail_item', $data);
			$this->load->view('home/v_footer');
			
		}
	}
	
	public function galeri()
    { 
		$data['data'] = $this->App->get_all('t_galeri');
		$this->load->view('home/v_atas');
        $this->load->view('galeri', $data);
        $this->load->view('home/v_footer');
	} 
	public function detail_galeri($value='')
	{
		if(is_numeric($this->uri->segment(3)));
		{
			$id = $this->uri->segment(3);
			$data['data'] = $this->App->get_where('t_galeri', array('id_galeri' => $id));
			$this->load->view('home/v_atas');
			$this->load->view('detail_galeri', $data);
			$this->load->view('home/v_footer');
			
		}
	}
	public function kontak()
	{
		
		if(is_numeric($this->uri->segment(3)))
		{
			$id = $this->uri->segment(3);
			$get = $this->App->get_where('t_komentar', array('id_komentar' => $id))->row();
			
			$item = array(
				'nama' => $this->input->post('nama', TRUE),
				'email' => $this->input->post('email', TRUE),
				'no_hp' => $this->input->post('no_hp', TRUE),
				'komentar' => $this->input->post('komentar', TRUE)
				);
			$this->cart->insert($data);
		echo '<script> type="text/javascript">window.history.go(-1);</script>';
		}
	
		$data['nama'] = $this->input->post('nama', TRUE);
		$data['email'] = $this->input->post('email', TRUE);
		$data['no_hp'] = $this->input->post('no_hp', TRUE);
		$data['komentar'] = $this->input->post('komentar', TRUE);
		$data['header'] = "kotak";
		
		$data['data'] = $this->App->get_all('t_kontak');
		$this->load->view('home/v_atas');
			$this->load->view('kontak', $data);
			$this->load->view('home/v_footer');
		
	}
}

