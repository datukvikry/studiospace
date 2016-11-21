<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model
{
 function login($email, $password)
 {
   $this->db->select('id_user, email, password, tipe_user');
   $this->db->from('user');
   $this->db->where('email', $email);
   $this->db->where('password', md5($password));
   $this->db->limit(1);
 
   $query = $this->db->get();
 
   if($query->num_rows()==1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>

