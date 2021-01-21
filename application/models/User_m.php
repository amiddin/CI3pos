<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    // check_not_login();
    // check_admin();
    $this->load->model('user_m');
    $this->load->library('form_validation');
  }

  public function login($post)
  {
    $this->db->SELECT('*');
    $this->db->FROM('user');
    $this->db->WHERE('username', $post['username']);
    $this->db->WHERE('password', sha1($post['password']));
    $query = $this->db->get();
    return $query;
  }

  public function get($id = NULL)
  {
    $this->db->FROM('user');
    if ($id != NULL) {
      $this->db->WHERE('user_id', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function add($post)
  {
    $params['name'] = $post['fullname'];
    $params['username'] = $post['username'];
    $params['password'] = sha1($post['password']);
    $params['address'] = $post['address'] != "" ? $post['address'] : null;
    $params['level'] = $post['level'];
    $this->db->insert('user', $params);
  }

  public function edit($post)
  {
    $params['name'] = $post['fullname'];
    $params['username'] = $post['username'];
    if (!empty($post['password'])) {
      $params['password'] = sha1($post['password']);
    }
    $params['address'] = $post['address'] != "" ? $post['address'] : null;
    $params['level'] = $post['level'];
    $this->db->where('user_id', $post['user_id']);
    $this->db->update('user', $params);
  }

  public function del($id)
  {
    $this->db->where('user_id', $id);
    $this->db->delete('user');
  }
}
