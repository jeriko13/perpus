<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Api_anggota extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data anggota
    function index_get()
    {
        $id = $this->get('id_anggota');
        if ($id == '') {
            $anggota = $this->db->get('anggota')->result();
        } else {
            $this->db->where('id_anggota', $id);
            $anggota = $this->db->get('anggota')->result();
        }
        $this->response($anggota, 200);
    }

    //Mengirim atau menambah data baru
    function index_post()
    {
        $data = array(
            'id_anggota'        => $this->post('id_anggota'),
            'nama_anggota'      => $this->post('nama_anggota'),
            'jenkel'            => $this->post('jenkel'),
            'alamat'            => $this->post('alamat'),
            'no_hp'             => $this->post('no_hp')


        );
        $insert = $this->db->insert('anggota', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data yang telah ada
    function index_put()
    {
        $id = $this->put('id_anggota');
        $data = array(
            'id_anggota'        => $this->put('id_anggota'),
            'nama_anggota'      => $this->put('nama_anggota'),
            'jenkel'            => $this->put('jenkel'),
            'alamat'            => $this->put('alamat'),
            'no_hp'             => $this->put('no_hp')
        );
        $this->db->where('id_anggota', $id);
        $update = $this->db->update('anggota', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data 
    function index_delete()
    {
        $id = $this->delete('id_anggota');
        $this->db->where('id_anggota', $id);
        $delete = $this->db->delete('anggota');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
