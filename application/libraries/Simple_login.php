<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Simple_login
  {
    protected $CI;

    public function __construct()
    {
      $this->CI =& get_instance();
      $this->CI->load->model('user_model');
    }

    public function login($username,$password)
    {
      $check = $this->CI->user_model->login($username,$password);
      // Jika ada data user, maka create session login
      if ($check) {
        $id_user     = $check->id_user;
        $nama        = $check->nama;
        $akses_level = $check->akses_level;
        // create session
        $this->CI->session->set_userdata('id_user', $id_user);
        $this->CI->session->set_userdata('nama', $nama);
        $this->CI->session->set_userdata('username', $username);
        $this->CI->session->set_userdata('akses_level', $akses_level);
        // redirect kehalaman admin yang diproteksi
        redirect(base_url('admin/dashboard'), 'refresh');
      }else {
        // Kalau tidak ada (username dan password salah) maka akan login lagi
        $this->CI->session->set_flashdata('warning', 'Username atau password salah');
        redirect(base_url('login'), 'refresh');
      }
    }

    public function cek_login()
    {
      // Memeriksa apakah sudah ada atau belum
      if ($this->CI->session->userdata('username') == "") {
        $this->CI->session->set_flashdata('warning', 'Anda belum login');
        redirect(base_url('login'), 'refresh');
      }
    }

    public function logout()
    {
      $this->CI->session->unset_userdata('id_user');
      $this->CI->session->unset_userdata('nama');
      $this->CI->session->unset_userdata('username');
      $this->CI->session->unset_userdata('akses_level');

      $this->CI->session->set_flashdata('sukses', 'Anda berhasil logout');
      redirect(base_url('login'), 'refresh');
    }

    public function ingat_password()
    {
      
    }
  }
