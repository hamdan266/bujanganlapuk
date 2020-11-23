<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan_model extends CI_model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listing()
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->order_by('id_pelanggan', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    // login pelanggan
    public function login($email, $password)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where(array(
            'email'       =>  $email,
            'password'    => SHA1($password)
        ));
        $this->db->order_by('id_pelanggan', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    // sudah login pelanggan
    public function sudah_login($email, $nama_pelanggan)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where(array(
            'email'             =>  $email,
            'nama_pelanggan'    => $nama_pelanggan
        ));
        $this->db->order_by('id_pelanggan', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    // detail pelanggan
    public function detail($id_pelanggan)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('id_pelanggan', $id_pelanggan);
        $this->db->order_by('id_pelanggan', 'desc');
        $query = $this->db->get();
        return $query->row();
    }


    // tambah
    public function tambah($data)
    {
        $this->db->insert('pelanggan', $data);
    }
    // edit
    public function edit($data)
    {
        $this->db->where('id_pelanggan', $data['id_pelanggan']);
        $this->db->update('pelanggan', $data);
    }

    // delete
    public function delete($data)
    {
        $this->db->where('id_pelanggan', $data['id_pelanggan']);
        $this->db->delete('pelanggan', $data);
    }
}
