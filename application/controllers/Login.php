<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library(array('session', 'form_validation'));
		$this->load->model(array('auth_model', 'App'));
		
		//$this->load->model('web_model');
	}
    
    public function index()
    { if ($this->session->userdata('logged_in') == TRUE) {
			redirect('home');
		} else {
        $this->load->view('home/v_atas');
        $this->load->view('login/v_login');
        $this->load->view('home/v_footer');
        }
    }

    function login() 
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			redirect('home');
		} else {
			// fails
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));
				$result = $this->auth_model->login($username,$password);
				if ($result) {
					$this->session->set_flashdata("msg");
					redirect('home');
				} else {
					$this->session->set_flashdata("msg");
					redirect('login');
				}
			}
		}

	function logout() {
	if ($this->session->userdata('logged_in') == TRUE) {
			$data = array(
				'id_user'	=>	'',
				'username'	=>	'',
				'logged_in'	=>	FALSE
				);
			$this->session->set_userdata($data);
			$this->session->set_flashdata("msg");
			redirect('home');
		} else {
			$this->session->set_flashdata("msg");
			redirect('login');
		}	 

	}
	public function daftar()
	{
		
		if ($this->input->post('submit',TRUE)== 'submit')
		{
			$this->form_validation->set_rules('nama1','Nama Depan',"required|min_length[3]|regex_match[/^[a-zA-Z'.]+$/]");
			$this->form_validation->set_rules('nama2','Nama Belakang',"regex_match[/^[a-zA-Z'.]+$/]");
			$this->form_validation->set_rules('user','Username',"required|min_length[5]|regex_match[/^[a-zA-Z0-9]+$/]");
			$this->form_validation->set_rules('email','Email',"required|valid_email");
			$this->form_validation->set_rules('pass1','Password',"required|min_length[5]");
			$this->form_validation->set_rules('pass2','Masukan Ulang Password',"required|matches[pass1]");
			$this->form_validation->set_rules('jk','Jenis Kelamin',"required");
			$this->form_validation->set_rules('telp','Telp',"required|min_length[8]|numeric");
			$this->form_validation->set_rules('alamat','Alamat',"required|min_length[10]");
			if ($this->form_validation->run()== TRUE)
			{
				$data = array(
				'username' => $this->input->post('user', TRUE),
				'fullname' => $this->input->post('nama1', TRUE).' '.$this->input->post('nama2', TRUE),
				'email' => $this->input->post('email', TRUE),
				'password' => md5($this->input->post('pass1', TRUE)),
				'jk' => $this->input->post('jk', TRUE),
				'telp' => $this->input->post('telp', TRUE),
				'alamat' => $this->input->post('alamat', TRUE),
				'status' => 1
				);
				if($this->App->insert('t_member', $data));
				{
					$this->load->view('home/v_atas');
					$this->load->view('login/v_login');
					$this->load->view('home/v_footer');
				}
			}
		}
		if ($this->session->userdata('logged_in') == TRUE) {
			redirect('home');
		}
				$data = array(
				'user' => $this->input->post('username', TRUE),
				'nama1' => $this->input->post('nama1', TRUE),
				'nama2' => $this->input->post('nama2', TRUE),
				'email' => $this->input->post('email', TRUE),
				'jk' => $this->input->post('jk', TRUE),
				'telp' => $this->input->post('telp', TRUE),
				'alamat' => $this->input->post('alamat', TRUE)
				);
		$this->load->view('home/v_atas');
        $this->load->view('login/v_daftar', $data);
        $this->load->view('home/v_footer');
	}
	public function profil()
    {
		if (!$this->session->userdata('logged_in') == TRUE) 
		{
			redirect('login');
		}
		$this->load->library('form_validation');
		
		$get = $this->App->get_where('t_member', array('id_user' => 
		$this->session->userdata('id_user')))->row();
		if ($this->input->post('submit',TRUE)== 'submit')
		{
			$this->form_validation->set_rules('nama1','Nama Depan',"required|min_length[3]|regex_match[/^[a-zA-Z'.]+$/]");
			$this->form_validation->set_rules('nama2','Nama Belakang',"regex_match[/^[a-zA-Z'.]+$/]");
			$this->form_validation->set_rules('user','Username',"required|min_length[5]|regex_match[/^[a-zA-Z0-9]+$/]");
			$this->form_validation->set_rules('pass','Masukan Password Anda',"required|min_length[5]");
			$this->form_validation->set_rules('jk','Jenis Kelamin',"required");
			$this->form_validation->set_rules('telp','Telp',"required|min_length[8]|numeric");
			$this->form_validation->set_rules('alamat','Alamat',"required|min_length[10]");
			if ($this->form_validation->run()== TRUE)
			{
				if(password_verify($this->input->post('pass', TRUE), $get->password))
					{
				$data = array(
				'username' => $this->input->post('user', TRUE),
				'fullname' => $this->input->post('nama1', TRUE).' '.$this->input->post('nama2', TRUE),
				'jk' => $this->input->post('jk', TRUE),
				'telp' => $this->input->post('telp', TRUE),
				'alamat' => $this->input->post('alamat', TRUE),
				);
				if ($this->App->update('t_member', $data, array('id_user'=> 
				$this->session->userdata('id_user'))))
				{
					$this->session->set_userdata(array('name' => $this->input->post('nama1', TRUE).' '.$this->input->post('nama2', TRUE)));
					
					redirect('home');
				}
			} 
		}
	}
	
		$name = explode(' ', $get->fullname);
		
		$data['nama1'] = $name[0];
		$data['nama2'] = $name[1];
		$data['user'] = $get->username;
		$data['email'] = $get->email;
		$data['jk'] = $get->jk;
		$data['telp'] = $get->telp;
		$data['alamat'] = $get->alamat;
	
		$this->load->view('home/v_atas');
        $this->load->view('login/profil', $data);
        $this->load->view('home/v_footer');
    }
	
	
}