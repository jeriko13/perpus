<?php 

class M_dashboard Extends CI_Model{

	public function countAnggota()
	{
		return $this->db->count_all('anggota');
	}

	public function countBuku()
	{
		return $this->db->count_all('buku');
	}

	public function countPinjam()
	{
		return $this->db->count_all('peminjaman');
	}

	public function countKembali()
	{
		return $this->db->count_all('pengembalian');
	}
}