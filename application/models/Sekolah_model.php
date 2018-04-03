<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // menambah data
    public function tambah($data)
    {
        
        $this->db->insert('sekolah', $data);
    }

    // mengambil semua data
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->order_by('id_sekolah','DESC');
        return $this->db->get()->result();
    }

    // mengambil data berdasarkan id
    public function detail($id_sekolah)
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->where('id_sekolah', $id_sekolah);
        $this->db->order_by('id_sekolah','DESC');
        return $this->db->get()->row();
    }

    // mengupdate data 
    public function edit($data)
    {
        $this->db->where('id_sekolah', $data['id_sekolah']);
        $this->db->update('sekolah', $data);
    }

    // Mendelete data 
    public function delete($id_sekolah)
    {
        $this->db->where('id_sekolah', $id_sekolah);
        $this->db->delete('sekolah');
    }


}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */