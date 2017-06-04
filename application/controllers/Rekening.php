<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening extends CI_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->model('admin');
		//$this->load->model('web_model');
	}
		public function index()
    { 
	$data['data'] = $this->admin->get_all('t_rekening');
	$this->template->admin('admin/managemen_rekening', $data);
	} 
	public function add_rekening()
	{
		if ($this->input->post('submit',TRUE)== 'submit'){
			$this->form_validation->set_rules('nama_pemilik','Nama Pemilik','required|min_length[4]');
			$this->form_validation->set_rules('no_rekening','No Rekening','required|numeric');
			$this->form_validation->set_rules('nama_bank','Nama Bank','required|min_length[2]');
			$this->form_validation->set_rules('status','Status','required|numeric');
			if ($this->form_validation->run()== TRUE)
			{
				$item = array(
				'nama_pemilik' => $this->input->post('nama_pemilik', TRUE),
				'no_rekening' => $this->input->post('no_rekening', TRUE),
				'nama_bank' => $this->input->post('nama_bank', TRUE),
				'status' => $this->input->post('status', TRUE)
				
				);
				$this->admin->insert('t_rekening', $item);
				
				} else{
					$this->session->set_flashdata('alert','Anda belum memilih gambar');
				}
			}
		
		$data['nama_pemilik'] = $this->input->post('nama_pemilik', TRUE);
		$data['no_rekening'] = $this->input->post('nama', TRUE);
		$data['nama_bank'] = $this->input->post('harga', TRUE);
		$data['header'] = "Tambah Rekening";
		
		$this->template->Admin('admin/form_rekening', $data);
		
	}
	
	public function edit_rekening()
	{
		$id_rekening = $this->uri->segment(3);
		
		if ($this->input->post('submit',TRUE)== 'submit'){
			$this->form_validation->set_rules('nama_pemilik','Nama Pemilik','required|min_length[4]');
			$this->form_validation->set_rules('no_rekening','No Rekening','required|numeric');
			$this->form_validation->set_rules('nama_bank','Nama Bank','required|min_length[2]');
			$this->form_validation->set_rules('status','Status','required|numeric');
			if ($this->form_validation->run()== TRUE)
			{
				$item = array(
				'nama_pemilik' => $this->input->post('nama_pemilik', TRUE),
				'no_rekening' => $this->input->post('no_rekening', TRUE),
				'nama_bank' => $this->input->post('nama_bank', TRUE),
				'status' => $this->input->post('status', TRUE)
				
				);
				
				$this->admin->update('t_rekening', $item, array('id_rekening' => $id_rekening));	
				} else{
				$this->admin->update('t_rekening', $item, array('id_rekening' => $id_rekening));
				
			}
			redirect('rekening');
		}
		$id_rekening = $this->uri->segment(3);
		$item = $this->admin->get_where('t_rekening', array('id_rekening' => $id_rekening));
		foreach ($item->result() as $key){
		$data['nama_pemilik'] = $key->nama_pemilik;
		$data['no_rekening'] = $key->no_rekening;
		$data['nama_bank'] = $key->nama_bank;
		}
		$data['header'] = "Ubah Data Rekening";
		$this->template->Admin('admin/form_rekening', $data);
		
	}
	public function delete()
	{
		if ($this->uri->segment(3))
		{
			$rowid = $this->uri->segment(3);
			
			$this->kategori->remove($rowid);
			redirect('kategori');
			}

		}
}
