<?php
defined('BASEPATH') or exit('No direct script access allowed');

class unit_m extends CI_Model
{
  public function get($id = NULL)
  {
    $this->db->FROM('p_unit');
    if ($id != NULL) {
      $this->db->WHERE('unit_id', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function add($post)
  {
    $params = [
      'name' => $post['unit_name']
    ];
    $this->db->insert('p_unit', $params);
  }

  public function edit($post)
  {
    $params = [
      'name' => $post['unit_name'],
      'updated' => date('Y-m-d H:i:s')
    ];
    $this->db->where('unit_id', $post['id']);
    $this->db->update('p_unit', $params);
  }

  public function del($id)
  {
    $this->db->where('unit_id', $id);
    $this->db->delete('p_unit');
  }
}
