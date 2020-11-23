<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        // validasi 
        $this->form_validation->set_rules(
            'username',
            'Username',
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
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            // proses ke simple login
            $this->simple_login->login($username, $password);
        }

        // end validasi
        $data = array('title' => 'Login Administrator');
        $this->load->view('login/list', $data, FALSE);
    }

    // fungsi logout
    public function logout()
    {
        // ambil fungsi logout dari simple login

        $this->simple_login->logout();
    }
}
