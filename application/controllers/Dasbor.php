<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasbor extends CI_Controller
{
    // LOAD MODEL
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pelanggan_model');
        $this->load->model('header_transaksi_model');
        $this->load->model('transaksi_model');
        $this->load->model('rekening_model');
        // halaman ini diproteksi dengan simple_pelanggan => Check Login
        $this->simple_pelanggan->cek_login();
    }
    // halaman Dasbor
    public function index()
    {
        // amnil data login id_pelanggan dari session
        $id_pelanggan       =   $this->session->userdata('id_pelanggan');
        $header_transaksi   =   $this->header_transaksi_model->pelanggan($id_pelanggan);

        $data = array(
            'title'   =>  'Dashboard Pelanggan',
            'header_transaksi'  =>   $header_transaksi,
            'isi'   =>  'dasbor/list'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    // belanja
    public function belanja()
    {
        // amnil data login id_pelanggan dari session
        $id_pelanggan       =   $this->session->userdata('id_pelanggan');
        $header_transaksi   =   $this->header_transaksi_model->pelanggan($id_pelanggan);

        $data = array(
            'title'             =>  'Riwayat belanja',
            'header_transaksi'  =>   $header_transaksi,
            'isi'               =>  'dasbor/belanja'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    // detail
    public function detail($kode_transaksi)
    {
        // amnil data login id_pelanggan dari session
        $id_pelanggan       =   $this->session->userdata('id_pelanggan');
        $header_transaksi   =   $this->header_transaksi_model->kode_transaksi($kode_transaksi);
        $transaksi          =   $this->transaksi_model->kode_transaksi($kode_transaksi);
        // pastikan bahwa pelangan hanya mengakses data transasksinya
        if ($header_transaksi->id_pelanggan != $id_pelanggan) {
            $this->session->flashdata('warning', 'Anda mencoba mengakses data orang lain');
            redirect(base_url('masuk'));
        }

        $data = array(
            'title'             =>  'Riwayat belanja',
            'header_transaksi'  =>   $header_transaksi,
            'transaksi'         =>   $transaksi,
            'isi'               =>  'dasbor/detail'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    // profil
    public function profil()
    {
        // amnil data login id_pelanggan dari session
        $id_pelanggan       =   $this->session->userdata('id_pelanggan');
        $pelanggan          =   $this->pelanggan_model->detail($id_pelanggan);

        // validasi input
        $valid = $this->form_validation;

        $valid->set_rules(
            'nama_pelanggan',
            'Nama Pelanggan',
            'required',
            array('required' => '%s harus diisi')
        );

        $valid->set_rules(
            'alamat',
            'Alamat Pelanggan',
            'required',
            array('required' => '%s harus diisi')
        );

        $valid->set_rules(
            'telepon',
            'Telepon Pelanggan',
            'required',
            array('required' => '%s harus diisi')
        );

        if ($valid->run() === FALSE) {
            // End Validasi

            $data = array(
                'title'             =>  'Profil saya',
                'pelanggan'         =>   $pelanggan,
                'isi'               =>  'dasbor/profil'
            );
            $this->load->view('layout/wrapper', $data, FALSE);

            // masuk databsase
        } else {
            $i = $this->input;
            // kalau password lebih dari 6 maka passwordnya di gnti
            if (strlen($i->post('password')) >= 6) {
                $data = array(
                    'id_pelanggan'      =>  $id_pelanggan,
                    'nama_pelanggan'    => $i->post('nama_pelanggan'),
                    'password'          => SHA1($i->post('password')),
                    'telepon'           => $i->post('telepon'),
                    'alamat'            => $i->post('alamat')
                );
            } else {
                // kalau password kurang dari 6 maka passsword gak du ganti
                $data = array(
                    'id_pelanggan'      =>  $id_pelanggan,
                    'nama_pelanggan'    => $i->post('nama_pelanggan'),
                    'telepon'           => $i->post('telepon'),
                    'alamat'            => $i->post('alamat')
                );
            }
            // end data update
            $this->pelanggan_model->edit($data);
            $this->session->set_flashdata('sukses', 'Update profil berhasil');
            redirect(base_url('dasbor/profil'), 'refresh');
        }
        // end masuk database
    }

    // konfirmasi pembayaran
    public function konfirmasi($kode_transaksi)
    {
        $header_transaksi   =   $this->header_transaksi_model->kode_transaksi($kode_transaksi);
        $rekening           =   $this->rekening_model->listing();

        // validasi input
        $valid = $this->form_validation;

        $valid->set_rules(
            'nama_bank',
            'Nama bank',
            'required',
            array('required' => '%s harus diisi')
        );
        $valid->set_rules(
            'rekening_pembayaran',
            'Nomor Rekening',
            'required',
            array('required' => '%s harus diisi')
        );
        $valid->set_rules(
            'rekening_pelanggan',
            'Nama Pemilik Rekening',
            'required',
            array('required' => '%s harus diisi')
        );
        $valid->set_rules(
            'tanggal_bayar',
            'Tanggal Pembayaran',
            'required',
            array('required' => '%s harus diisi')
        );
        $valid->set_rules(
            'jumlah_bayar',
            'Jumlah Pembayaran',
            'required',
            array('required' => '%s harus diisi')
        );

        if ($valid->run()) {
            // check jika gambar diganti
            if (!empty($_FILES['bukti_bayar']['name'])) {

                $config['upload_path']   = './assets/upload/image/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '2400';
                $config['max_width']     = '2024';
                $config['max_height']    = '2024';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('bukti_bayar')) {
                    // End Validasi
                    $data   =   array(
                        'title'                 => 'Konfirmasi pembayaran',
                        'header_transaksi'      =>  $header_transaksi,
                        'rekening'              =>  $rekening,
                        'error'                 => $this->upload->display_errors(),
                        'isi'                   =>  'dasbor/konfirmasi'
                    );
                    $this->load->view('layout/wrapper', $data, FALSE);

                    // masuk databsase
                } else {
                    $upload_gambar   = array('upload_data' => $this->upload->data());
                    // create thumbail gambar
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/upload/image/' . $upload_gambar['upload_data']['file_name'];
                    // lokasi folder thumbnail
                    $config['new_image'] = './assets/upload/image/thumbs/';
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']         = 250;
                    $config['height']       = 250;
                    $config['thumb_marker'] = '';

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();
                    // endcreate thumbail gambar
                    $i = $this->input;

                    $data   = array(
                        'id_header_transaksi'         => $header_transaksi->id_header_transaksi,
                        'status_bayar'                => 'selesai',
                        'jumlah_bayar'                => $i->post('jumlah_bayar'),
                        'rekening_pembayaran'         => $i->post('rekening_pembayaran'),
                        'rekening_pelanggan'          => $i->post('rekening_pelanggan'),
                        'bukti_bayar'                 => $upload_gambar['upload_data']['file_name'],
                        'id_rekening'                 => $i->post('id_rekening'),
                        'tanggal_bayar'               => $i->post('tanggal_bayar'),
                        'nama_bank'                   => $i->post('nama_bank')
                    );
                    $this->header_transaksi_model->edit($data);
                    $this->session->set_flashdata('sukses', 'Konfirmasi pembayaran berhasil');
                    redirect(base_url('dasbor'), 'refresh');
                }
            } else {
                // edit produk tanpa ganti gambar
                $i = $this->input;

                $data   = array(
                    'id_header_transaksi'         => $header_transaksi->id_header_transaksi,
                    'status_bayar'                => 'konfirmasi',
                    'jumlah_bayar'                => $i->post('jumlah_bayar'),
                    'rekening_pembayaran'         => $i->post('rekening_pembayaran'),
                    'rekening_pelanggan'          => $i->post('rekening_pelanggan'),
                    // 'bukti_bayar'                 => $upload_gambar['upload_data']['file_name'],
                    'id_rekening'                 => $i->post('id_rekening'),
                    'tanggal_bayar'               => $i->post('tanggal_bayar'),
                    'nama_bank'                   => $i->post('nama_bank')
                );
                $this->header_transaksi_model->edit($data);
                $this->session->set_flashdata('sukses', 'Konfirmasi pembayaran berhasil');
                redirect(base_url('dasbor'), 'refresh');
            }
        }
        // end masuk database
        $data   =   array(
            'title'                 => 'Konfirmasi pembayaran',
            'header_transaksi'      =>  $header_transaksi,
            'rekening'              =>  $rekening,
            'isi'                   =>  'dasbor/konfirmasi'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
