<?php

class Anggota extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_anggota');
	}

	public function index()
	{
		$isi['content']	= 'anggota/v_anggota';
		$isi['judul']	= 'Daftar Data Anggota';
		$isi['data']	= $this->db->get('anggota')->result();
		$this->load->view('v_dashboard', $isi);
	}

	public function tambah_anggota()
	{
		$isi['content']		= 'anggota/form_anggota';
		$isi['judul']		= 'Form Tambah Anggota';
		$isi['id_anggota'] 	= $this->m_anggota->id_anggota();
		$this->load->view('v_dashboard', $isi);
	}

	public function simpan()
	{
		$data = array(
			'id_anggota' 	=> $this->input->post('id_anggota'),
			'nama_anggota' 	=> $this->input->post('nama_anggota'),
			'jenkel' 		=> $this->input->post('jenkel'),
			'alamat' 		=> $this->input->post('alamat'),
			'no_hp' 		=> $this->input->post('no_hp')
		);
		$query = $this->db->insert('anggota', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Berhasil di Simpan');
			redirect('anggota');
		}
	}

	public function edit($id)
	{
		$isi['content']		= 'anggota/edit_anggota';
		$isi['judul']		= 'Form Edit Anggota';
		$isi['data']	 	= $this->m_anggota->edit($id);
		$this->load->view('v_dashboard', $isi);
	}

	public function update()
	{
		$id_anggota = $this->input->post('id_anggota');
		$data = array(
			'id_anggota' 	=> $this->input->post('id_anggota'),
			'nama_anggota' 	=> $this->input->post('nama_anggota'),
			'jenkel' 		=> $this->input->post('jenkel'),
			'alamat' 		=> $this->input->post('alamat'),
			'no_hp' 		=> $this->input->post('no_hp')
		);
		$query = $this->m_anggota->update($id_anggota, $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Berhasil di Update');
			redirect('anggota');
		}
	}

	public function hapus($id)
	{
		$query = $this->m_anggota->hapus($id);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Berhasil di Hapus');
			redirect('anggota');
		}
	}
	public function view($id)
	{
		$isi['content']		= 'anggota/view_anggota';
		$isi['judul']		= 'Form View Anggota';
		$isi['data']	 	= $this->m_anggota->view($id);
		$this->load->view('v_dashboard', $isi);
	}
}
