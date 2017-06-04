<?php

class m_paketwisata extends CI_Model {

	public function getAll()
	{
		return $this->db->get('paket');  
	}

	

	
}