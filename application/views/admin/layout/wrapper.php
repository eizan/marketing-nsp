<?php
// proteksoi halaman
if ($this->session->userdata('username') == "" && $this->session->userdata('password') == "" ) {
	$this->session->set_flashdata('sukses','Silahkan login terlebih dahulu');
	redirect(base_url('login'),'refresh');
}

// Gabungkan semua layout
require_once ('head.php');
require_once ('header.php');
require_once ('nav.php');
require_once ('content.php');
require_once ('footer.php');