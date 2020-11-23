<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    // LOAD MODEL
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pelanggan_model');
    }
    // halaman registrasi
    public function index()
    {
        // validasi input
        $valid = $this->form_validation;

        $valid->set_rules(
            'nama_pelanggan',
            'Nama Pelanggan',
            'required',
            array('required' => '%s harus diisi')
        );

        $valid->set_rules(
            'email',
            'Email',
            'required|valid_email|is_unique[pelanggan.email]',
            array(
                'required'      => '%s harus diisi',
                'valid_email'   => '%s tidak valid',
                'is_unique'     =>  '%s sudah terdaftar'
            )
        );

        $valid->set_rules(
            'password',
            'Password',
            'required',
            array('required' => '%s harus diisi')
        );

        if ($valid->run() === FALSE) {
            // End Validasi
            $data = array(
                'title'     =>  'Registrasi Pelanggan',
                'isi'       =>  'registrasi/list'
            );
            $this->load->view('layout/wrapper', $data, FALSE);

            // masuk databsase
        } else {
            $i = $this->input;
            $data = array(
                'status_pelanggan'  =>  'Pending',
                'nama_pelanggan'    => $i->post('nama_pelanggan'),
                'email'             => $i->post('email'),
                'password'          => SHA1($i->post('password')),
                'telepon'           => $i->post('telepon'),
                'alamat'            => $i->post('alamat'),
                'tanggal_daftar'    => date('Y-m-d H:i:s')
            );
            $this->pelanggan_model->tambah($data);
            // cretae sesason
            $this->session->set_userdata('email', $i->post('email'));
            $this->session->set_userdata('nama_pelanggan', $i->post('nama_pelanggan'));
            // end create season
            $this->session->set_flashdata('sukses', 'Registrasi berhasil');
            redirect(base_url('registrasi/sukses'), 'refresh');
        }
        // end masuk database
    }

    // sukses
    public function sukses()
    {
        $data = array(
            'title'     =>  'Registrasi berhasil',
            'isi'       =>  'registrasi/sukses'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
