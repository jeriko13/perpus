<?php 

class M_pengembalian Extends CI_Model{

	public function getAllData()
    {
        $this->db->select('*');
        $this->db->from('pengembalian');
        $this->db->join('anggota', 'pengembalian.id_anggota = anggota.id_anggota');
        $this->db->join('buku', 'pengembalian.id_buku = buku.id_buku');
        return $this->db->get()->result();
    }
}