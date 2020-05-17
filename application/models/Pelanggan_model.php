<?php
  defined('BASEPATH') OR exit('No direct script access allowed');


  class Pelanggan_model extends CI_Model
  {

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    //Listing all user
    public function listing()
    {
      $this->db->select('*');
      $this->db->from('pelanggan');
      $this->db->order_by('id_pelanggan', 'asc');
      $query = $this->db->get();
      return $query->result();
    }

    //Detail pelanggan
    public function detail($id_pelanggan)
    {
      $this->db->select('*');
      $this->db->from('pelanggan');
      $this->db->where('id_pelanggan', $id_pelanggan);
      $this->db->order_by('id_pelanggan', 'asc');
      $query = $this->db->get();
      return $query->row();
    }

    public function login($email,$password)
    {
      $this->db->select('*');
      $this->db->from('pelanggan');
      $this->db->where(array('email'    => $email,
                             'password' => SHA1($password)));
      $this->db->order_by('id_pelanggan', 'asc');
      $query = $this->db->get();
      return $query->row();
    }

    public function sudah_login($email,$nama_pelanggan)
    {
      $this->db->select('*');
      $this->db->from('pelanggan');
      $this->db->where('email', $email);
      $this->db->where('nama_pelanggan', $nama_pelanggan);
      $this->db->order_by('id_pelanggan', 'asc');
      $query = $this->db->get();
      return $query->row();
    }

    // Login Pelanggan
    // public function login($email, $password)
    // {
    //   $this->db->select('*');
    //   $this->db->from('pelanggan');
    //   $this->db->where(array( 'email'    => $email,
    //                           'password' => SHA1($password)));
    //   $this->db->order_by('id_pelanggan', 'asc');
    //   $query = $this->db->get();
    //   return $query->row();
    // }

    // Tambah Data
    public function tambah($data)
    {
      $this->db->insert('pelanggan', $data);
    }

    // Edit Data
    public function edit($data)
    {
      $this->db->where('id_pelanggan', $data['id_pelanggan']);
      $this->db->update('pelanggan', $data);
    }

    // Hapus Data
    public function delete($data)
    {
      $this->db->where('id_pelanggan', $data['id_pelanggan']);
      $this->db->delete('pelanggan', $data);
    }
  }
