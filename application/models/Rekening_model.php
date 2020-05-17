<?php
  defined('BASEPATH') OR exit('No direct script access allowed');


  class Rekening_model extends CI_Model
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
      $this->db->from('rekening');
      $this->db->order_by('id_rekening', 'asc');
      $query = $this->db->get();
      return $query->result();
    }

    //Detail rekening
    public function detail($id_rekening)
    {
      $this->db->select('*');
      $this->db->from('rekening');
      $this->db->where('id_rekening', $id_rekening);
      $this->db->order_by('id_rekening', 'asc');
      $query = $this->db->get();
      return $query->row();
    }

    public function read($slug_rekening)
    {
      $this->db->select('*');
      $this->db->from('rekening');
      $this->db->where('slug_rekening', $slug_rekening);
      $this->db->order_by('id_rekening', 'asc');
      $query = $this->db->get();
      return $query->row();
    }

    // Login Rekening
    public function login($username, $password)
    {
      $this->db->select('*');
      $this->db->from('rekening');
      $this->db->where(array( 'username' => $username,
                              'password' => SHA1($password)));
      $this->db->order_by('id_rekening', 'asc');
      $query = $this->db->get();
      return $query->row();
    }

    // Tambah Data
    public function tambah($data)
    {
      $this->db->insert('rekening', $data);
    }

    // Edit Data
    public function edit($data)
    {
      $this->db->where('id_rekening', $data['id_rekening']);
      $this->db->update('rekening', $data);
    }

    // Hapus Data
    public function delete($data)
    {
      $this->db->where('id_rekening', $data['id_rekening']);
      $this->db->delete('rekening', $data);
    }
  }
