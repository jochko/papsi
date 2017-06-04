<?php
	class m_daftar extends CI_Model{
		public function tambah($nama, $email, $username,$jeniskelamin, $password){
			$data = array(
				'nama_user' => $nama,
				'email_user' => $email,
				'username' => $username,
				'jekel' => $jeniskelamin,
				'password' => $password,
				);
			$this->db->insert('member',$data);
		}
	} 
?>