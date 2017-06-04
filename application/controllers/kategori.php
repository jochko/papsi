<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->model('admin');
		//$this->load->model('web_model');
	}
		public function index()
    { 
		$data['data'] = $this->admin->get_all('t_kategori');
		$this->template->admin('admin/managemen_kategori', $data);
	} 
	public function add_kategori()
	{
		if ($this->input->post('submit',TRUE)== 'submit'){
			
			$this->form_validation->set_rules('kategori','Kategori','required|min_length[4]');
			$this->form_validation->set_rules('gambar','Gambar','required|min_length[4]');
			if ($this->form_validation->run()== TRUE)
			{
				$config['upload_path']= './assets/upload/';
				$config['allowed_types']= 'jpg|png|jpeg';
				$config['max_size']= '2048';
				$config['file_name']= 'gambar'.time();
				$this->load->library('upload', $config);
				
				if ($this->upload->do_upload('gambar'))
				{
				$gbr = $this->upload->data();
				$item = array(
				'kategori' => $this->input->post('kategori', TRUE),
				'gambar' => $gbr['file_name'],
				);
				$this->admin->insert('t_kategori', $item);
				} 
				
			}
		}
		$data['kategori'] = $this->input->post('kategori', TRUE);
		$data['gambar'] = $this->input->post('gambar', TRUE);
		$data['header'] = "Tambah Kategori";
		
		$this->template->Admin('admin/kategori_item', $data);
		
	}
	public function edit()
	{
		$id_kategori = $this->uri->segment(3);
		
		if ($this->input->post('submit',TRUE)== 'submit'){;
			$this->form_validation->set_rules('kategori','kategori','required|min_length[4]');
			if ($this->form_validation->run()== TRUE)
			{
				$config['upload_path']= './assets/upload/';
				$config['allowed_types']= 'jpg|png|jpeg';
				$config['max_size']= '2048';
				$config['file_name']= 'gambar'.time();
				
				$this->load->library('upload', $config);
				$item = array(
				'kategori' => $this->input->post('kategori', TRUE),
				'gambar' => $this->input->post('gambar', TRUE),
				);
				if ($this->upload->do_upload('gambar'))
				$gbr = $this->upload->data();
				unlink('assets/upload/'.$this->input->post('old_pict',TRUE));
				$item['gambar'] = $gbr['file_name'];
				
				$this->admin->update('t_kategori', $item, array('id_kategori' => $id_kategori));	
				} else{
					$this->admin->update('t_kategori', $item, array('id_kategori' => $id_kategori));
				
			}
			redirect('kategori');
		}
		$id_kategori = $this->uri->segment(3);
		$item = $this->admin->get_where('t_kategori', array('id_kategori' => $id_kategori));
		foreach ($item->result() as $key){
			$data['kategori'] = $key->kategori;
			$data['gambar'] = $key->gambar;
		}
		$data['header'] = "Ubah Data kategori";
		$this->template->Admin('admin/kategori_item', $data);
		
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
