<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasbor extends CI_Controller
{
    // load model
    public function __construct()
    {
        parent::__construct();
        // preoteksi halaman
        $this->simple_login->cek_login();
        $this->load->model('header_transaksi_model');
    }

    // halaman utama dasbor
    public function index()
    {
        // $data = array(
        //     'title' => 'Halaman Admin Bujangan',
        //     'isi' => 'admin/dasbor/list'
        // );
        // $this->load->view('admin/layout/wrapper', $data, FALSE);

        $header_transaksi = $this->header_transaksi_model->listing();

        $data = array(
            'title'     => 'Halaman Admin Bujangan',
            'header_transaksi' => $header_transaksi,
            'isi'       => 'admin/dasbor/list'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}
