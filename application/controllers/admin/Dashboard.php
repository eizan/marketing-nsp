<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
			'isi'	=> 'admin/dashboard/list' );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	// halaman profile
	public function profile()
	{
		$id_user 		= $this->session->userdata('id_user');
		$user 			= $this->user_model->detail($id_user);
		// validasi
		$this->form_validation->set_rules('nama', 'nama', 'required', 
			array(	'required' 		=> 'Nama Harus di isi'));

		$this->form_validation->set_rules('email', 'email', 'required|valid_email', 
			array(	'required' 		=> 'Email Harus di isi',
					'valid_email' 	=> 'Format Email Tidak Benar'));

		// jika ada error kembali ke halamn tambah
		if ($this->form_validation->run() == FALSE) {
			
			$data = array (	'title' => 'Update Profile '.$user->nama,
							'user'	=> $user,
							'isi' 	=> 'admin/dashboard/profile');
			$this->load->view('admin/layout/wrapper', $data, FALSE);

			// jika tidak lanjut
		} else {
			//perumpamaaan untuk mengecek passwod lebih dari 6 lalu update
			if(strlen($this->input->post('password')) > 6){
			//menyimapan imputan ke variable $data
			$data = array(	'id_user'		=> $id_user,
							'nama' 			=> $this->input->post('nama'),
							'email' 		=> $this->input->post('email'),
							'password' 		=> sha1($this->input->post('password')),
							'akses_level'	=> $this->input->post('akses_level'),
							'keterangan'	=> $this->input->post('keterangan'));
			// jika tidak lebih dari 6 karakter password
			}else{
				$data = array(	'id_user'		=> $id_user,
								'nama' 			=> $this->input->post('nama'),
								'email' 		=> $this->input->post('email'),
								'akses_level'	=> $this->input->post('akses_level'),
								'keterangan'	=> $this->input->post('keterangan'));
			}

			// proses ke database
			$this->user_model->edit($data);
			$this->session->set_flashdata('sukses','Profile Berhasil di update');
			redirect('admin/dashboard/profile','refresh');

		}
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */