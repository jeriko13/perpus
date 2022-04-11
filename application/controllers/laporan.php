<?php

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporan');
		$this->load->model('m_peminjaman2');
		$this->load->model('m_buku');
		$this->load->helper('tgl_indo_helper');
		$this->load->library('pdf_report');
		$this->load->library('excel_report');
	}

	public function peminjaman()
	{
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_ahir = $this->input->post('tgl_ahir');

		$this->session->set_userdata('tanggal_awal', $tgl_awal);
		$this->session->set_userdata('tanggal_ahir', $tgl_ahir);

		if (empty($tgl_awal) || empty($tgl_ahir)) {
			$isi['content']	= 'laporan/v_peminjaman';
			$isi['judul']	= 'Laporan Peminjaman';
			$isi['data']	= $this->m_laporan->getAllData();
		} else {
			$isi['content']	= 'laporan/v_peminjaman';
			$isi['judul']	= 'Laporan Peminjaman';
			$isi['data']	= $this->m_laporan->filterData($tgl_awal, $tgl_ahir);
		}

		$this->load->view('v_dashboard', $isi);
	}

	// public function refresh()
	// {
	// 	$isi['content']	= 'laporan/v_peminjaman';
	// 	$isi['judul']	= 'Laporan Peminjaman';
	// 	$isi['data']	= $this->m_laporan->getAllData();
	// 	$this->load->view('v_dashboard', $isi);	
	// }

	public function pdf_peminjaman()
	{
		if (empty($this->session->userdata('tanggal_awal')) || empty($this->session->userdata('tanggal_ahir'))) {
			$isi['data'] = $this->m_laporan->getAllData();
			$this->load->view('laporan/pdf_peminjaman', $isi);
		} else {
			$isi['data'] = $this->m_laporan->filterData($this->session->userdata('tanggal_awal'), $this->session->userdata('tanggal_ahir'));
			$this->load->view('laporan/pdf_peminjaman', $isi);
		}
	}


	public function excel()
	{
		$this->load->helper('exportexcel');
		$namaFile = "peminjaman.xls";
		$judul = "peminjaman";
		$tablehead = 0;
		$tablebody = 1;
		$nourut = 1;
		//penulisan header
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
		header("Content-Disposition: attachment;filename=" . $namaFile . "");
		header("Content-Transfer-Encoding: binary ");

		xlsBOF();

		$kolomhead = 0;
		xlsWriteLabel($tablehead, $kolomhead++, "No");
		xlsWriteLabel($tablehead, $kolomhead++, "Id Anggota");
		xlsWriteLabel($tablehead, $kolomhead++, "Id Buku");
		xlsWriteLabel($tablehead, $kolomhead++, "Tgl Pinjam");
		xlsWriteLabel($tablehead, $kolomhead++, "Tgl Kembali");

		foreach ($this->m_peminjaman2->get_all() as $data) {
			$kolombody = 0;

			//ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
			xlsWriteNumber($tablebody, $kolombody++, $nourut);
			xlsWriteLabel($tablebody, $kolombody++, $data->id_anggota);
			xlsWriteLabel($tablebody, $kolombody++, $data->id_buku);
			xlsWriteLabel($tablebody, $kolombody++, $data->tgl_pinjam);
			xlsWriteLabel($tablebody, $kolombody++, $data->tgl_kembali);

			$tablebody++;
			$nourut++;
		}

		xlsEOF();
		exit();
	}
	public function cetakdata($anggota_id)
	{
		$data['data'] = $this->db->get_where('anggota', ['id_anggota' => $anggota_id])->row();
		$this->load->view('laporan/cetak_anggota', $data);
	}
	public function cetakbuku($buku_id)
	{

		$data['data'] = $this->db->get_where('buku', ['id_buku' => $buku_id])->row();
		$this->db->from('buku');
		$this->db->join('pengarang', 'buku.id_pengarang = pengarang.id_pengarang');
		$this->db->join('penerbit', 'buku.id_penerbit = penerbit.id_penerbit');
		$this->load->view('laporan/cetak_buku', $data);
	}
	public function cetakpeminjaman($peminjaman_id)
	{
		$data['data'] = $this->db->get_where('peminjaman', ['id_pm' => $peminjaman_id])->row();
		$this->load->view('laporan/cetak_peminjaman', $data);
	}
	public function cetakpengembalian($pengembalian_id)
	{
		$data['data'] = $this->db->get_where('pengembalian', ['id_pengembalian' => $pengembalian_id])->row();
		$this->load->view('laporan/cetak_pengembalian', $data);
	}
	public function cetakpeminjaman_id($id_pm)
	{

		$isi['data'] = $this->m_laporan->getData_id($id_pm);
		$this->load->view('laporan/pdf_peminjaman', $isi);
	}
}
