<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Dashboard extends CI_Controller
  {
    // Load mode;
    public function __construct()
    {
      parent::__construct();
      // Proteksi halaman
      $this->simple_login->cek_login();
    }
    // Halaman utama Dashboard
    public function index()
    {
      $data = array('title' => 'Dashboard',
                    'isi'   => 'admin/dashboard/list');
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
  }
