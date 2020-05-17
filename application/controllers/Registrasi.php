<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('pelanggan_model');
  }

  public function index()
  {
    $valid = $this->form_validation;
    $valid->set_rules('nama_pelanggan', 'Nama lengkap', 'required',
            array('required'    => '%s harus diisi'));

    $valid->set_rules('email', 'Email', 'required|valid_email|is_unique[pelanggan.email]',
            array('required'    => '%s harus diisi',
                  'valid_email' => '%s tidak valid',
                  'is_unique'   => '%s sudah terdaftar'));

    $valid->set_rules('password', 'Password', 'required',
            array('required'   => '%s harus diisi'));

    if ($valid->run()===FALSE) {
    $data = array('title'  => 'Registrasi Pelanggan',
                  'isi'    => 'registrasi/list'
                 );
    $this->load->view('layout/wrapper', $data, FALSE);

    } else {
      $i = $this->input;
      $data = array( 'status_pelanggan'  => 'Pending',
                     'nama_pelanggan'    => $i->post('nama_pelanggan'),
                     'email'             => $i->post('email'),
                     'password'          => SHA1($i->post('password')),
                     'telepon'           => $i->post('telepon'),
                     'alamat'            => $i->post('alamat'),
                     'tanggal_daftar'    => date('Y-m-d  H:i:s')
                   );
      $this->pelanggan_model->tambah($data);
      // buat session login pelanggan
      $this->session->set_userdata('email', $i->post('email'));
      $this->session->set_userdata('nama_pelanggan', $i->post('nama_pelanggan'));

      $this->session->set_flashdata('sukses', 'Registrasi Berhasil');
      redirect(base_url('registrasi/sukses'), 'refresh');
    }
  }

  public function sukses()
  {
    $data = array('title'  => 'Registrasi berhasil',
                  'isi'    => 'registrasi/sukses'
                 );
    $this->load->view('layout/wrapper', $data, FALSE);
  }

}
