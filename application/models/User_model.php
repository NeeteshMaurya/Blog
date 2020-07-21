<?php
class User_model extends CI_model
{
  function check_login($username,$password)
  {
    $this->db->where('username',$username);
    $this->db->where('password',$password);

    $ans=$this->db->get('users');
    $data=$ans->result_array();
    return $data;
  }
}
?>