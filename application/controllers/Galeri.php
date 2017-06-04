<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends MY_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->model('admin');
		//$this->load->model('web_model');
	}
	public function index()
    { 
		$data['data'] = $this->admin->get_all('t_galeri');
		$this->template->admin('admin/managemen_galeri', $data);
	}
	public function add_galeri()
	{
		
		if ($this->input->post('submit',TRUE)== 'submit'){
			
			$this->form_validation->set_rules('nama','Nama Galeri','required|min_length[4]');
			$this->form_validation->set_rules('deskripsi','Deskripsi','required|min_length[4]');
			if ($this->form_validation->run()== TRUE)
			{$config['upload_path']= './assets/upload/';
				$config['allowed_types']= 'jpg|png|jpeg';
				$config['max_size']= '2048';
				$config['file_name']= 'gambar'.time();
				$this->load->library('upload', $config);
				
				if ($this->upload->do_upload('gambar'))
				{
				$gbr = $this->upload->data();
				$item = array(
				'nama' => $this->input->post('nama', TRUE),
				'gambar' => $gbr['file_name'],
				'keterangan' => $this->input->post('keterangan', TRUE),
				);
				$this->admin->insert('t_galeri', $item);	
				} 
				
			}
		}
		$data['nama'] = $this->input->post('nama', TRUE);
		$data['keterangan'] = $this->input->post('keterangani', TRUE);
		$data['header'] = "Tambah galeri";
		
		
		$this->template->Admin('admin/form_galeri', $data);
		
	}
	public function edit_galeri()
	{
		$id_galeri = $this->uri->segment(3);
		
		if ($this->input->post('submit',TRUE)== 'submit'){
			$this->form_validation->set_rules('nama','Nama Galeri','required|min_length[4]');
			$this->form_validation->set_rules('deskripsi','Deskripsi','required|min_length[4]');
			if ($this->form_validation->run()== TRUE)
			{
				$config['upload_path']= './assets/upload/';
				$config['allowed_types']= 'jpg|png|jpeg';
				$config['max_size']= '2048';
				$config['file_name']= 'gambar'.time();
				
				$this->load->library('upload', $config);
				
				$item = array(
				'nama' => $this->input->post('nama', TRUE),
				'gambar' => $gbr['file_name'],
				'keterangan' => $this->input->post('deskripsi', TRUE),
				);
				if ($this->upload->do_upload('gambar'))
				{
				$gbr = $this->upload->data();
				unlink('assets/upload/'.$this->input->post('old_pict',TRUE));
				$item['gambar'] = $gbr['file_name'];
				
				$this->admin->update('t_galeri', $item, array('id_galeri' => $id_galeri));	
				} else{
				$this->admin->update('t_galeri', $item, array('id_galeri' => $id_galeri));
				}
			}
			redirect('galeri');
		}
		$id_item=$this->uri->segment (3);
		$item = $this->admin->get_where('t_galeri', array('id_galeri' => $id_galeri));
		foreach ($item->result() as $key){
			$data['nama'] = $key->nama;
			$data['gambar'] = $key->gambar;
			$data['keterangan'] = $key->keterangan;
		}
		$data['header'] = "Ubah Data Item";
		$this->template->Admin('admin/form_galeri', $data);
		
	}
	public function detail_galeri()
	{
		$id_item=$this->uri->segment (3);
		$item = $this->admin->get_where('t_galeri', array('id_galeri' => $id_item));
		foreach ($item->result() as $key){
			$data['nama'] = $key->nama;
			$data['deskripsi'] = $key->keterangan;
			$data['gambar'] = $key->gambar;
		}
		$this->template->Admin('admin/detail_galeri', $data);
		
	}
}
