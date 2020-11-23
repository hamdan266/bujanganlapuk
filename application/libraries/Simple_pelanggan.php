<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Simple_pelanggan
{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
        // load data model pelanggan
        $this->CI->load->model('pelanggan_model');
    }

    // fungsi login
    public function login($email, $password)
    {
        $check = $this->CI->pelanggan_model->login($email, $password);
        // jika ada data user, maka create session untuk loginnya
        if ($check) {
            $id_pelanggan    = $check->id_pelanggan;
            $nama_pelanggan  = $check->nama_pelanggan;
            // create session
            $this->CI->session->set_userdata('id_pelanggan', $id_pelanggan);
            $this->CI->session->set_userdata('nama_pelanggan', $nama_pelanggan);
            $this->CI->session->set_userdata('email', $email);
            // jika sudah bnar maka redirect pada halaman admin
            redirect(base_url('dasbor'), 'refresh');
        } else {
            // kalau tidak ada maka suruh login lagi (usernmae atau password salah)
            $this->CI->session->set_flashdata('warning', 'Username atau password salah');
            redirect(base_url('masuk'), 'refresh');
        }
    }

    // cek login
    public function cek_login()
    {
        // memeriksa apakah session sudah atau atau belum, jika belum alihkan ke halaman login
        if ($this->CI->session->userdata('email') == "") {
            $this->CI->session->set_flashdata('warning', 'Anda belum login');
            redirect(base_url('masuk'), 'refresh');
        }
    }

    // fungsi logout
    public function logout()
    {
        // membuang semua session yang telah set pada saat login 
        $this->CI->session->unset_userdata('id_pelanggan');
        $this->CI->session->unset_userdata('nama_pelanggan');
        $this->CI->session->unset_userdata('email');
        // setelah sesion dibuang maka redirect ke halaman login
        $this->CI->session->set_flashdata('sukses', 'Berhasil Logout');
        redirect(base_url('masuk'), 'refresh');
    }
}
