<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// menambah data
	public function tambah($data)
	{
		
		$this->db->insert('user', $data);
	}

	// mengambil semua data
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id_user','DESC');
		return $this->db->get()->result();
	}

 	// mengambil data berdasarkan id
	public function detail($id_user)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $id_user);
		$this->db->order_by('id_user','DESC');
		return $this->db->get()->row();
	}

	// mengupdate data 
	public function edit($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->update('user', $data);
	}

	// Mendelete data 
	public function delete($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->delete('user');
	}

	// Login
	public function login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array(	'username'	=> $username,
								'password'	=> sha1($password)));
		$this->db->order_by('id_user','DESC');
		return $this->db->get()->row();
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */