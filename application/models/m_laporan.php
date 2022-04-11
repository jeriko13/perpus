<?php

class M_laporan extends CI_Model
{

	public function getAllData()
	{
		$this->db->select('*');
		$this->db->from('peminjaman');
		$this->db->join('anggota', 'peminjaman.id_anggota = anggota.id_anggota');
		$this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
		return $this->db->get()->result();
	}

	public function filterData($tgl_awal, $tgl_ahir)
	{
		$this->db->select('*');
		$this->db->from('peminjaman');
		$this->db->join('anggota', 'peminjaman.id_anggota = anggota.id_anggota');
		$this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
		$this->db->where('peminjaman.tgl_pinjam >=', $tgl_awal);
		$this->db->where('peminjaman.tgl_pinjam <=', $tgl_ahir);
		return $this->db->get()->result();
	}

	public function getData_id($id_pm)
	{
		$this->db->select('*');
		$this->db->from('peminjaman');
		$this->db->join('anggota', 'peminjaman.id_anggota = anggota.id_anggota');
		$this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
		$this->db->where('peminjaman.id_pm =', $id_pm);

		return $this->db->get()->result();
	}
}
