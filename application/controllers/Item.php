<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Item extends MY_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->library(array("template", "form_validation"));
		$this->load->model("admin");
		//$this->load->model("web_model");
	}
		public function index()
    { 
		$data["data"] = $this->admin->get_all("t_item");
		$this->template->admin("admin/managemen_item", $data);
	} 
	public function add_item()
	{
		if ($this->input->post("submit",TRUE)== "submit"){
			$this->form_validation->set_rules("id_kategori","id_kategori","required|numeric");
			$this->form_validation->set_rules("nama","Nama Item","required|min_length[4]");
			$this->form_validation->set_rules("harga","Harga","required|numeric");
			$this->form_validation->set_rules("kapasitas","Kapasitas","required|numeric");
			$this->form_validation->set_rules("desk","Deskiripsi","required|min_length[4]");
			$this->form_validation->set_rules("fas","Fasilitas","required|min_length[4]");
			$this->form_validation->set_rules("alamat","Alamat","required|min_length[4]");
			$this->form_validation->set_rules("status","Status","required|numeric");

			$item["id_kategori"] = $this->input->post("id_kategori", TRUE);
			$item["nama"] = $this->input->post("nama", TRUE);
			$item["harga"] = $this->input->post("harga", TRUE);
			$item["kapasitas"] = $this->input->post("kapasitas", TRUE);
			$item["ket_item"] = $this->input->post("desk", TRUE);
			$item["fas_item"] = $this->input->post("fas", TRUE);
			$item["alamat"] = $this->input->post("alamat", TRUE);
			$item["status"] = $this->input->post("status", TRUE);

			if ($this->form_validation->run()== TRUE)
			{
				$config["upload_path"]= "./assets/upload/";
				$config["allowed_types"]= "jpg|png|jpeg";
				$config["max_size"]= "2048";
				$config["file_name"]= "gambar".time();
				$this->load->library("upload", $config);

				if ($this->upload->do_upload("gambar"))
				{
					$gbr = $this->upload->data();
					$item["gambar"] = $gbr["file_name"];
					
					$id = $this->admin->insert("t_item", $item);

					$response["message"] = "Item berhasil disimpan.";
					$response["css_class"] = "alert-success";
					$this->session->set_flashdata("response", $response);

					redirect(base_url()."item/edit".$id, "refresh");
				} 
				else{
					$response["message"] = "Anda belum memilih gambar.";
					$response["css_class"] = "alert-danger";
					$this->session->set_flashdata("response", $response);
				}

			}
			$data["item"] = $item;
		}
		$data["kategori"] = $this->admin->get_all("t_kategori")->result();
		$data["header"] = "Tambah Item";
		
		// $this->print_r($data);
		$this->template->Admin("admin/form_item", $data);
		
	}
	public function detail_item()
	{
		$id_item=$this->uri->segment (3);
		$item = $this->admin->get_where("t_item", array("id_item" => $id_item));
		foreach ($item->result() as $key){
			$data["nama"] = $key->nama;
			$data["harga"] = $key->harga;
			$data["kapasitas"] = $key->kapasitas;
			$data["gambar"] = $key->gambar;
			$data["ket_item"] = $key->ket_item;
			$data["fas_item"] = $key->fas_item;
			$data["alamat"] = $key->alamat;
		}
		$this->template->Admin("admin/detail_item", $data);
		
	}
	public function edit()
	{
		$id_item = $this->uri->segment(3);
		
		if ($this->input->post("submit",TRUE)== "submit"){
			$this->form_validation->set_rules("nama","Nama Item","required|min_length[4]");
			$this->form_validation->set_rules("harga","Harga","required|numeric");
			$this->form_validation->set_rules("kapasitas","Kapasitas","required|numeric");
			$this->form_validation->set_rules("desk","Deskiripsi","required|min_length[4]");
			$this->form_validation->set_rules("fas","Fasilitas","required|min_length[4]");
			$this->form_validation->set_rules("alamat","Alamat","required|min_length[4]");
			$this->form_validation->set_rules("status","Status","required|numeric");
			if ($this->form_validation->run()== TRUE)
			{
				$config["upload_path"]= "./assets/upload/";
				$config["allowed_types"]= "jpg|png|jpeg";
				$config["max_size"]= "2048";
				$config["file_name"]= "gambar".time();
				
				$this->load->library("upload", $config);
				
				$item["nama"] = $this->input->post("nama", TRUE);
				$item["harga"] = $this->input->post("harga", TRUE);
				$item["kapasitas"] = $this->input->post("kapasitas", TRUE);
				$item["ket_item"] = $this->input->post("desk", TRUE);
				$item["fas_item"] = $this->input->post("fas", TRUE);
				$item["alamat"] = $this->input->post("alamat", TRUE);
				$item["status"] = $this->input->post("status", TRUE);

				if ($this->upload->do_upload("gambar"))
				{
				$gbr = $this->upload->data();
				unlink("assets/upload/".$this->input->post("old_pict",TRUE));
				$item["gambar"] = $gbr["file_name"];
				
				$this->admin->update("t_item", $item, array("id_item" => $id_item));	
				} else{
					$this->admin->update("t_item", $item, array("id_item" => $id_item));
				}
			}
			redirect("item");
		}
		$id_item=$this->uri->segment (3);
		$item = $this->admin->get_where("t_item", array("id_item" => $id_item))->result_array();
		// $this->print_r($item);
		// JIKA ID ITEM DITEMUKKAN , DAN JUMLAH ID TSB 1 
		if (count($item)===1) {
			$data["item"] = $item[0];
		}
		else{
			echo "ID NOT FOUND";
			die;
		}
		$data["kategori"] = $this->admin->get_all("t_kategori")->result();

		$data["header"] = "Ubah Data Item";
		$this->template->Admin("admin/form_item", $data);
		
	}
	
	
}
