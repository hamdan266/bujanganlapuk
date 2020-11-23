<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listing()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('id_user', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    // detail user
    public function detail($id_user)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id_user', $id_user);
        $this->db->order_by('id_user', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    // login user
    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array(
            'username' => $username,
            'password' => SHA1($password)
        ));
        $this->db->order_by('id_user', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    // tambah
    public function tambah($data)
    {
        $this->db->insert('users', $data);
    }
    // edit
    public function edit($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->update('users', $data);
    }

    // delete
    public function delete($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->delete('users', $data);
    }
}
