<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function coba()
	{
		return $this->db->count_all('anggota');
	}

}