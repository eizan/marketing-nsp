<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presentasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('presentasi_model');
	}

	public function index()
	{
		$data = array(	'title' => 'Data Presentasi',
						'isi'	=> 'admin/presentasi/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function tambah()
	{
		$data = array(	'title'	=> 'Tambah data Presentai',
						'isi'	=> 'admin/presentasi/tambah');
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// validasi data
		$this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'trim|required');
	}

}

/* End of file Presentasi.php */
/* Location: ./application/controllers/admin/Presentasi.php */