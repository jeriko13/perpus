<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Perpus extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Perpus_model');
    }

    function index()
    {
        $data['dataWisata'] = $this->Perpus_model->get_all();
        $this->load->view('perpustakaan/perpustakaan_list', $data);
    }

    function cetak_perpus()
    {
        $data['dataWisata'] = $this->Perpus_model->get_all();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "perpustakaan";
        $this->pdf->load_view('cetak/perpus', $data);
    }
}
