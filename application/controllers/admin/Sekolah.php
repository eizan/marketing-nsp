<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('sekolah_model');
	}

	// Halaman utama
	public function index()
	{
		$sekolah = $this->sekolah_model->listing();

		$data = array(	'title' => 'Data Sekolah ('.count($sekolah).')', 
						'sekolah'	=> $sekolah,
						'isi' 	=> 'admin/sekolah/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//halaman tambah
	public function tambah()
	{
		// validasi data
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'nama', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required');
		$this->form_validation->set_rules('kabupaten', 'kabupaten', 'trim|required');
		$this->form_validation->set_rules('jumlah_siswa', 'jumlah_siswa', 'trim|required');
		$this->form_validation->set_rules('kontak_person', 'kontak_person', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
		$this->form_validation->set_rules('telp', 'telp', 'trim|required');
		// menambah kan style text warning kecil ketika error
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

		// validasi if
		if ($this->form_validation->run() == FALSE) {

			//jika validasi gagal
			$data = array(	'title'		=> 'Tambah data Sekolah',
							'isi'		=> 'admin/sekolah/tambah');
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			// mengambil value di form
			$data = array(	'nama'				=> $this->input->post('nama'),
							'alamat'			=> $this->input->post('alamat'),
							'kecamatan'			=> $this->input->post('kecamatan'),
							'kabupaten'			=> $this->input->post('kabupaten'),
							'jumlah_siswa'		=> $this->input->post('jumlah_siswa'),
							'kontak_person'		=> $this->input->post('kontak_person'),
							'jabatan'			=> $this->input->post('jabatan'),
							'telp'				=> $this->input->post('telp'));
			

			//simpan ke database
			$this->sekolah_model->tambah($data);

			// redirek dan memberi pesan sukses
			$this->session->set_flashdata('sukses', 'Sekolah berhasil di tambah !');
			redirect('admin/sekolah','refresh');
		}
		
	}

	// edit
	public function edit($id_sekolah)
	{
		$sekolah = $this->sekolah_model->detail($id_sekolah);

		// validasi data
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'nama', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required');
		$this->form_validation->set_rules('kabupaten', 'kabupaten', 'trim|required');
		$this->form_validation->set_rules('jumlah_siswa', 'jumlah_siswa', 'trim|required');
		$this->form_validation->set_rules('kontak_person', 'kontak_person', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
		$this->form_validation->set_rules('telp', 'telp', 'trim|required');
		// menambah kan style text warning kecil ketika error
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

		// cek validasi
		if ($this->form_validation->run() == FALSE) {

			// jika gagal
			$data = array(	'title'		=> 'Edit data Sekolah: '.$sekolah->nama,
							'sekolah'	=> $sekolah,
							'isi'		=> 'admin/sekolah/edit');
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			//jika tidak ada masalah

			//set value ke variable data
			$data = array(	'id_sekolah'		=> $id_sekolah,
							'nama'				=> $this->input->post('nama'),
							'alamat'			=> $this->input->post('alamat'),
							'kecamatan'			=> $this->input->post('kecamatan'),
							'kabupaten'			=> $this->input->post('kabupaten'),
							'jumlah_siswa'		=> $this->input->post('jumlah_siswa'),
							'kontak_person'		=> $this->input->post('kontak_person'),
							'jabatan'			=> $this->input->post('jabatan'),
							'telp'				=> $this->input->post('telp'));

			// simpan ke database
			$this->sekolah_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Sekolah berhasil di update');
			redirect('admin/sekolah','refresh');
		}
	}

	// delete
	public function delete($id_sekolah)
	{	
		// mengirim id_sekolah ke model untuk di exsekusi
		$this->sekolah_model->delete($id_sekolah);

		// mengirim pesan berhasil dan meredirek
		$this->session->set_flashdata('sukses', 'Data berhasil di delete');
		redirect('admin/sekolah','refresh');
	}

	

}

/* End of file Sekolah.php */
/* Location: ./application/controllers/admin/Sekolah.php */