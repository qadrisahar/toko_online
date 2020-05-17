<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('produk_model');
    $this->load->model('kategori_model');
    $this->load->model('konfigurasi_model');
    $this->load->model('pelanggan_model');
    $this->load->model('header_transaksi_model');
    $this->load->model('transaksi_model');
    // Load random string
    $this->load->helper('string');
  }

  public function index()
  {
    $keranjang = $this->cart->contents();

    $data = array('title'     => 'Keranjang Belanja',
                  'keranjang' => $keranjang,
                  'isi'       => 'belanja/list'
                  );
    $this->load->view('layout/wrapper', $data, FALSE);
  }

  public function sukses()
  {
    $data = array('title'     => 'Belanja berhasil',
                  'isi'       => 'belanja/sukses'
                  );
    $this->load->view('layout/wrapper', $data, FALSE);
  }

  public function checkout()
  {
    // cek pelanggan sudah login atau belum
    if ($this->session->userdata('email')) {
      $email          = $this->session->userdata('email');
      $nama_pelanggan = $this->session->userdata('nama_pelanggan');
      $pelanggan      = $this->pelanggan_model->sudah_login($email,$nama_pelanggan);
      $keranjang      = $this->cart->contents();

      $valid = $this->form_validation;
      $valid->set_rules('nama_pelanggan', 'Nama lengkap', 'required',
              array('required'    => '%s harus diisi'));

      $valid->set_rules('telepon', 'Nomor telepon', 'required',
              array('required'    => '%s harus diisi'));

      $valid->set_rules('alamat', 'Alamat', 'required',
              array('required'    => '%s harus diisi'));

      $valid->set_rules('email', 'Email', 'required|valid_email',
              array('required'    => '%s harus diisi',
                    'valid_email' => '%s tidak valid'));

      if ($valid->run()===FALSE) {
        $data = array('title'     => 'CheckOut',
                      'keranjang' => $keranjang,
                      'pelanggan' => $pelanggan,
                      'isi'       => 'belanja/checkout'
                      );
        $this->load->view('layout/wrapper', $data, FALSE);
      } else {
        $i = $this->input;
        $data = array( 'id_pelanggan'      => $pelanggan->id_pelanggan,
                       'nama_pelanggan'    => $i->post('nama_pelanggan'),
                       'email'             => $i->post('email'),
                       'telepon'           => $i->post('telepon'),
                       'alamat'            => $i->post('alamat'),
                       'kode_transaksi'    => $i->post('kode_transaksi'),
                       'tanggal_transaksi' => $i->post('tanggal_transaksi'),
                       'jumlah_transaksi'  => $i->post('jumlah_transaksi'),
                       'status_bayar'      => 'Belum',
                       'tanggal_post'      => date('Y-m-d  H:i:s')
                     );
        $this->header_transaksi_model->tambah($data);
        foreach ($keranjang as $keranjang) {
          $sub_total = $keranjang['price'] * $keranjang['qty'];
          $data = array('id_pelanggan'        => $pelanggan->id_pelanggan,
                        'kode_transaksi'      => $i->post('kode_transaksi'),
                        'id_produk'           => $keranjang['id'],
                        'harga'               => $keranjang['price'],
                        'jumlah'              => $keranjang['qty'],
                        'total_harga'         => $sub_total,
                        'tanggal_transaksi'   => $i->post('tanggal_transaksi')
                       );
         $this->transaksi_model->tambah($data);
        }
        // setelah masuk ke tabel transaksi, maka keranjang akan dikosongkan kembali
        $this->cart->destroy();

        $this->session->set_flashdata('sukses', 'Check Out Berhasil');
        redirect(base_url('belanja/sukses'), 'refresh');
      }
    } else {
      $this->session->set_flashdata('sukses', 'Silahkan login atau registrasi terlebih dahulu');
      redirect(base_url('registrasi'), 'refresh');
    }
  }

  public function add()
  {
    $id            = $this->input->post('id');
    $qty           = $this->input->post('qty');
    $price         = $this->input->post('price');
    $name          = $this->input->post('name');
    $redirect_page = $this->input->post('redirect_page');

    $data = array('id'  => $id,
                  'qty' => $qty,
                  'price' => $price,
                  'name' => $name
                );
    $this->cart->insert($data);
    redirect($redirect_page, 'refresh');
  }

  public function update_cart($rowid)
  {
    if ($rowid) {
      $data = array('rowid'  => $rowid,
                    'qty'    => $this->input->post('qty')
                   );
      $this->cart->update($data);
      $this->session->set_flashdata('sukses', 'Data keranjang telah diupdate');
      redirect(base_url('belanja'), 'refresh');
    } else {
      redirect(base_url('belanja'),'refresh');
    }
  }

  // Hapus semua kernajang
  public function hapus()
  {
    if ($rowid) {
      // Hapus satu
      $this->cart->remove($rowid);
      $this->session->set_flashdata('sukses', 'Data keranjang belanja telah di hapus');
      redirect(base_url('belanja'),'refresh');
    } else {
        // Hapus Semua
      $this->cart->destroy();
      $this->session->set_flashdata('sukses', 'Data keranjang belanja telah di hapus');
      redirect(base_url('belanja'),'refresh');
    }
  }
}
