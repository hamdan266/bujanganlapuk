<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasbor_model extends CI_model
{
    public function __construct()
    {
        // parent:__construct();
        parent::__construct();
        $this->load->database();
    }

    // Total Produk
    public function total_produk()
    {
        $this->db->select('COUNT(*) AS total');
        $this->db->from('produk');
        $query = $this->db->get();
        return $query->row();
    }

    // Total Produk
    public function total_pelanggan()
    {
        $this->db->select('COUNT(*) AS total');
        $this->db->from('pelanggan');
        $query = $this->db->get();
        return $query->row();
    }

    // Total Produk
    public function total_header_transaksi()
    {
        $this->db->select('COUNT(*) AS total');
        $this->db->from('header_transaksi');
        $query = $this->db->get();
        return $query->row();
    }
    // Total Produk
    public function total_transaksi()
    {
        $this->db->select('SUM(transaksi.total_harga) AS total');
        $this->db->from('transaksi');
        // $this->db->join('header_transaksi', 'header_transaksi.kode_transaksi = transaksi.kode_transaksi');
        // $this->db->group_by('transaksi.kode_transaksi');
        $query = $this->db->get();
        return $query->row();
    }

    // Total Berita
    public function total_berita()
    {
        $this->db->select('COUNT(*) AS total');
        $this->db->from('berita');
        $query = $this->db->get();
        return $query->row();
    }

    // Total Berita
    public function total_rekening()
    {
        $this->db->select('COUNT(*) AS total');
        $this->db->from('rekening');
        $query = $this->db->get();
        return $query->row();
    }
}
