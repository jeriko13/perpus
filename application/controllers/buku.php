<?php 

class Buku Extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_buku');
	}

	public function index()
	{
		$isi['content'] = 'buku/v_buku';
		$isi['judul']	= 'Daftar Data Buku';
		$isi['data']	= $this->m_buku->get_data_buku();
		$this->load->view('v_dashboard', $isi);
	}

	public function tambah_buku()
	{
		$isi['content'] = 'buku/form_buku';
		$isi['judul']	= 'Form Tambah Buku';
		$isi['id_buku']	= $this->m_buku->id_buku();
		$isi['pengarang'] = $this->db->get('pengarang')->result();
		$isi['penerbit'] = $this->db->get('penerbit')->result();
		$this->load->view('v_dashboard', $isi);
	}

	public function simpan()
	{
		$data = array(
			'id_buku' 		=> $this->input->post('id_buku'),
			'id_pengarang' 	=> $this->input->post('id_pengarang'),
			'id_penerbit' 	=> $this->input->post('id_penerbit'), 
			'judul_buku' 	=> $this->input->post('judul_buku'),
			'tahun_terbit' 	=> $this->input->post('tahun_terbit'),
			'jumlah' 		=> $this->input->post('jumlah')
		);

		$query = $this->db->insert('buku', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Berhasil di Simpan');
			redirect('buku');
		}
	}

	public function edit($id)
	{
		$isi['content'] 	= 'buku/edit_buku';
		$isi['judul']		= 'Form Edit Buku';
		$isi['pengarang'] 	= $this->db->get('pengarang')->result();
		$isi['penerbit'] 	= $this->db->get('penerbit')->result();
		$isi['data']		= $this->m_buku->edit($id);
		$this->load->view('v_dashboard', $isi);
	}

	public function update()
	{
		$id_buku = $this->input->post('id_buku');
		$data = array(
			'id_buku' 		=> $this->input->post('id_buku'),
			'id_pengarang' 	=> $this->input->post('id_pengarang'),
			'id_penerbit' 	=> $this->input->post('id_penerbit'), 
			'judul_buku' 	=> $this->input->post('judul_buku'),
			'tahun_terbit' 	=> $this->input->post('tahun_terbit'),
			'jumlah' 		=> $this->input->post('jumlah')
		);

		$query = $this->m_buku->update($id_buku, $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Berhasil di Update');
			redirect('buku');
		}
	}

	public function hapus($id)
	{
		$query = $this->m_buku->hapus($id);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Berhasil di Hapus');
			redirect('buku');
		}
	}
}