<?php
  defined('BASEPATH') OR exit('No direct script access allowed');


  class User_model extends CI_Model
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
      $this->db->from('users');
      $this->db->order_by('id_user', 'asc');
      $query = $this->db->get();
      return $query->result();
    }

    //Detail user
    public function detail($id_user)
    {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('id_user', $id_user);
      $this->db->order_by('id_user', 'asc');
      $query = $this->db->get();
      return $query;
    }

    // Login User
    public function login($username, $password)
    {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where(array( 'username' => $username,
                              'password' => SHA1($password)));
      $this->db->order_by('id_user', 'asc');
      $query = $this->db->get();
      return $query->row();
    }

    // Tambah Data
    public function tambah($data)
    {
      $this->db->insert('users', $data);
    }

    // Edit Data
    public function edit($data)
    {
      $this->db->where('id_user', $data['id_user']);
      $this->db->update('users', $data);
    }

    // Hapus Data
    public function delete($data)
    {
      $this->db->where('id_user', $data['id_user']);
      $this->db->delete('users', $data);
    }
  }
