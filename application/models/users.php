<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model 
{
  public function login()
  {
  	$this->db->insert('login',$_POST);
  }
  public function showdata()
  {
  	$this->db->order_by("ID","desc");
    return $this->db->get("login")->row()->ID;
  }
  public function delete($ID)
  {  
  	$this->db->where('ID',$ID);
  	$this->db->delete('login');

  }
  public function getdata($ID)
  { 
   $this->db->where('ID',$ID);
   return $this->db->get('login')->result();
  }
  public function update($ID)
  {
   $this->db->where('ID',$ID);
   $this->db->update('login',$_POST);
  }
}