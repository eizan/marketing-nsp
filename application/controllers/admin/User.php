<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	// Halaman utama
	public function index()
	{
		$user = $this->user_model->listing();

		$data = array(	'title' => 'Data User ('.count($user).')', 
						'user'	=> $user,
						'isi' 	=> 'admin/user/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// halaman tambah
	public function tambah()
	{
		// validasi
		$this->form_validation->set_rules('nama', 'nama', 'required', 
			array(	'required' 		=> 'Nama Harus di isi'));

		$this->form_validation->set_rules('email', 'email', 'required|valid_email', 
			array(	'required' 		=> 'Email Harus di isi',
					'valid_email' 	=> 'Format Email Tidak Benar'));

		$this->form_validation->set_rules('username', 'username', 'required|is_unique[user.username]', 
			array(	'required' 		=> 'Username Harus di isi',
					'is_unique' 	=> 'Username <strong>'.$this->input->post('username').'</strong> sudah ada. Buat username baru'));

		$this->form_validation->set_rules('password', 'password', 'required|min_length[6]', 
			array(	'required' 		=> 'Password Harus di isi',
					'min_length' 	=> 'Password minimal 6 karakter'));

		if ($this->form_validation->run() == FALSE) {
			// jika ada error kembali ke halamn tambah
			$data = array (	'title' => 'Tambah User',
						'isi' 	=> 'admin/user/tambah');
			$this->load->view('admin/layout/wrapper', $data, FALSE);

		} else {
			// jika tidak lanjut

			// meproses foto
			$config['upload_path']          = base_url('uploads/');
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('upload_form', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                    $this->load->view('upload_success', $data);
            }
			//menyimapan imputan ke variable $data
			$data = array(	'nama' 			=> $this->input->post('nama'),
							'email' 		=> $this->input->post('email'),
							'username' 		=> $this->input->post('username'),
							'password' 		=> sha1($this->input->post('password')),
							'akses_level'	=> $this->input->post('akses_level'),
							'keterangan'	=> $this->input->post('keterangan'));
			
			$this->user_model->tambah($data);
			$this->session->set_flashdata('sukses','Data Berhasil di tambah');
			redirect('admin/user','refresh');

		}
		
	}

	// halaman edit
	public function edit($id_user)
	{
		$user = $this->user_model->detail($id_user);
		// validasi
		$this->form_validation->set_rules('nama', 'nama', 'required', 
			array(	'required' 		=> 'Nama Harus di isi'));

		$this->form_validation->set_rules('email', 'email', 'required|valid_email', 
			array(	'required' 		=> 'Email Harus di isi',
					'valid_email' 	=> 'Format Email Tidak Benar'));

		// jika ada error kembali ke halamn tambah
		if ($this->form_validation->run() == FALSE) {
			
			$data = array (	'title' => 'Edit User '.$user->nama,
							'user'	=> $user,
							'isi' 	=> 'admin/user/edit');
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
			$this->session->set_flashdata('sukses','Data Berhasil di Edit');
			redirect('admin/user','refresh');

		}
		
	}

	public function delete($id_user)
	{
		// proteksi delete
		// proteksoi halaman
		if ($this->session->userdata('username') == "" && $this->session->userdata('password') == "" ) {
			$this->session->flashdata('sukses','Silahkan login terlebih dahulu');
			redirect(base_url('login'),'refresh');
		}

		$data = array(	'id_user'	=> $id_user);
		$this->user_model->delete($data);
		$this->session->set_flashdata('sukses','Data Berhasil di Delete');
		redirect('admin/user','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */