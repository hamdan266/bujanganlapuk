<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekening extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rekening_model');
        // proteksi halaman
        $this->simple_login->cek_login();
    }

    // data rekening
    public function index()
    {
        $rekening = $this->rekening_model->listing();

        $data = array(
            'title' => 'Data rekening',
            'rekening' => $rekening,
            'isi' => 'admin/rekening/list'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    // tambah data rekening
    public function tambah()
    {
        // validasi input
        $valid = $this->form_validation;

        $valid->set_rules(
            'nama_bank',
            'Nama rekening',
            'required',
            array(
                'required' => '%s harus diisi'
            )
        );

        $valid->set_rules(
            'nama_pemilik',
            'Nama pemilik rekening',
            'required',
            array(
                'required' => '%s harus diisi'
            )
        );

        $valid->set_rules(
            'nomor_rekening',
            'Nomor rekening',
            'required|is_unique[rekening.nomor_rekening]',
            array(
                'required' => '%s harus diisi',
                'is_unique' => '%s sudah ada, buat nomor rekening baru!'
            )
        );

        if ($valid->run() === FALSE) {
            // End Validasi

            $data = array(
                'title' => 'Tambah Data rekening',
                'isi' => 'admin/rekening/tambah'
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
            // masuk databsase
        } else {
            $this->load->helper('url');
            $i = $this->input;

            $data = array(
                'nama_bank'             => $i->post('nama_bank'),
                'nomor_rekening'        => $i->post('nomor_rekening'),
                'nama_pemilik'          => $i->post('nama_pemilik')
            );
            $this->rekening_model->tambah($data);
            $this->session->set_flashdata('sukses', 'Data telah ditambah');
            redirect(base_url('admin/rekening'), 'refresh');
        }
        // end masuk database
    }

    // edit data rekening
    public function edit($id_rekening)
    {
        $rekening = $this->rekening_model->detail($id_rekening);

        // validasi input
        $valid = $this->form_validation;
        $valid->set_rules(
            'nama_bank',
            'Nama rekening',
            'required',
            array('required' => '%s harus diisi')
        );

        if ($valid->run() === FALSE) {
            // End Validasi
            $data = array(
                'title' => 'Edit Data rekening',
                'rekening' => $rekening,
                'isi' => 'admin/rekening/edit'
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
            // masuk databsase
        } else {
            $i = $this->input;

            $data = array(
                'id_rekening'           => $id_rekening,
                'nama_bank'             => $i->post('nama_bank'),
                'nomor_rekening'        => $i->post('nomor_rekening'),
                'nama_pemilik'          => $i->post('nama_pemilik')
            );
            $this->rekening_model->edit($data);
            $this->session->set_flashdata('sukses', 'Data telah diedit');
            redirect(base_url('admin/rekening'), 'refresh');
        }
        // end masuk database
    }


    // Delete rekening
    public function delete($id_rekening)
    {
        $data = array('id_rekening' => $id_rekening);
        $this->rekening_model->delete($data);
        $this->session->set_flashdata('sukses', 'Data telah dihapus');
        redirect(base_url('admin/rekening'), 'refresh');
    }
}
