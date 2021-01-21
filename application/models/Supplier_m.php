<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_m extends CI_Model
{
  public function get($id = NULL)
  {
    $this->db->FROM('supplier');
    if ($id != NULL) {
      $this->db->WHERE('supplier_id', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function del($id)
  {
    $this->db->where('supplier_id', $id);
    $this->db->delete('supplier');
  }
}
