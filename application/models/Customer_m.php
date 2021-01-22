<?php
defined('BASEPATH') or exit('No direct script access allowed');

class customer_m extends CI_Model
{
  public function get($id = NULL)
  {
    $this->db->FROM('customer');
    if ($id != NULL) {
      $this->db->WHERE('customer_id', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function add($post)
  {
    $params = [
      'name' => $post['customer_name'],
      'phone' => $post['phone'],
      'gender' => $post['gender'],
      'address' => $post['addr'],
    ];
    $this->db->insert('customer', $params);
  }

  public function edit($post)
  {
    $params = [
      'name' => $post['customer_name'],
      'phone' => $post['phone'],
      'gender' => $post['gender'],
      'address' => $post['addr'],
      'updated' => date('Y-m-d H:i:s')
    ];
    $this->db->where('customer_id', $post['id']);
    $this->db->update('customer', $params);
  }

  public function del($id)
  {
    $this->db->where('customer_id', $id);
    $this->db->delete('customer');
  }
}
