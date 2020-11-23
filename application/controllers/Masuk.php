<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masuk extends CI_Controller
{
    // LOAD MODEL
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pelanggan_model');
    }

    // login pelnggan
    public function index()
    {
        // validasi 
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required',
            array('required' => '%s harus diisi')
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array('required' => '%s harus diisi')
        );

        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            // proses ke simple login
            $this->simple_pelanggan->login($email, $password);
        }

        // end validasi

        $data = array(
            'title'     =>  'Login Pelanggan',
            'isi'       => 'masuk/list'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    // logout
    public function logout()
    {
        // ambil fungsi logout dari simple_pelanggan yang sudah di set di autooload libraris
        $this->simple_pelanggan->logout();
    }
}
