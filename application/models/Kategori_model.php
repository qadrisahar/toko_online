<?php
  defined('BASEPATH') OR exit('No direct script access allowed');


  class Kategori_model extends CI_Model
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
      $this->db->from('kategori');
      $this->db->order_by('id_kategori', 'asc');
      $query = $this->db->get();
      return $query->result();
    }

    //Detail kategori
    public function detail($id_kategori)
    {
      $this->db->select('*');
      $this->db->from('kategori');
      $this->db->where('id_kategori', $id_kategori);
      $this->db->order_by('id_kategori', 'asc');
      $query = $this->db->get();
      return $query->row();
    }

    public function read($slug_kategori)
    {
      $this->db->select('*');
      $this->db->from('kategori');
      $this->db->where('slug_kategori', $slug_kategori);
      $this->db->order_by('id_kategori', 'asc');
      $query = $this->db->get();
      return $query->row();
    }

    // Login Kategori
    public function login($username, $password)
    {
      $this->db->select('*');
      $this->db->from('kategori');
      $this->db->where(array( 'username' => $username,
                              'password' => SHA1($password)));
      $this->db->order_by('id_kategori', 'asc');
      $query = $this->db->get();
      return $query->row();
    }

    // Tambah Data
    public function tambah($data)
    {
      $this->db->insert('kategori', $data);
    }

    // Edit Data
    public function edit($data)
    {
      $this->db->where('id_kategori', $data['id_kategori']);
      $this->db->update('kategori', $data);
    }

    // Hapus Data
    public function delete($data)
    {
      $this->db->where('id_kategori', $data['id_kategori']);
      $this->db->delete('kategori', $data);
    }
  }
