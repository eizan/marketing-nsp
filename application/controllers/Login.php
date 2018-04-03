<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	//load model
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	// halaman login
	public function index()
	{
		// validasi
		$this->form_validation->set_rules('username', 'username', 'required', 
			array(	'required'		=> 'username harus di isi!'));

		$this->form_validation->set_rules('password', 'password', 'required',
			array(	'required'		=> 'password harus di isi!'));

		//jika validasi ada yang salah
		if ($this->form_validation->run() == FALSE) {
			$data = array ( 'title' => 'Login Admin');
			$this->load->view('admin/login_view', $data, FALSE);

		} else {
			//jika tidak ada yang salah
			$username 		= $this->input->post('username');
			$password		= $this->input->post('password');

			// cek login
			$cek_login 		= $this->user_model->login($username, $password);

			if (count($cek_login) == 1) {
				//jika ada hasil dari pengecekan
				$this->session->set_userdata('username',$username);
				$this->session->set_userdata('akses_level',$cek_login->akses_level);
				$this->session->set_userdata('id_user',$cek_login->id_user);
				$this->session->set_userdata('nama',$cek_login->nama);
				redirect(base_url('admin/dashboard'),'refresh');
			}else{
				// jika hasil tidak ada atau tidak cocok
				$this->session->set_flashdata('sukses', 'Username atau password Salah');
				redirect(base_url('login'),'refresh');
			}
		}

		
	}

	//logout
	public function logout()
	{
		
		// unset data
		/*$this->session->unset_userdata('username');
		$this->session->unset_userdata('akses_level');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('nama');*/

		$this->session->sess_destroy();
		// kirim pesan sukses logout
		$this->session->set_flashdata('sukses',' Berhasil logout');
		redirect(base_url('login'),'refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */