<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

   public function login($username, $password)
   {
      $this->db->select('*');
      $this->db->from('tbl_user');
      $this->db->join('tbl_role', 'tbl_role.id_role = tbl_user.id_role', 'left');
      $this->db->where(array(
         'username' => $username,
         'password' => $password,
      ));
      return $this->db->get()->row();
   }
}
