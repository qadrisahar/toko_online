<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('pelanggan_model');
  }

  function index()
  {
    $this->form_validation->set_rules('email', 'Email', 'required',
           array('required' => '%s harus diisi!'));
    $this->form_validation->set_rules('password', 'Password', 'required',
           array('required' => '%s harus diisi!'));

    if ($this->form_validation->run()) {
      $email    = $this->input->post('email');
      $password = $this->input->post('password');

      $this->simple_pelanggan->login($email,$password);
    }

    $data = array('title'  => 'Login Pelanggan',
                  'isi'    => 'masuk/list'
                 );
    $this->load->view('layout/wrapper', $data, FALSE);
  }

  public function logout()
  {
    $this->simple_pelanggan->logout();
  }

}
