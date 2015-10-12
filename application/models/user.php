<?php
Class User extends CI_Model
{
  function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

  function get_user($usr, $pwd)
     {
          $sql = "select * from usertb where username = '" . $usr . "' and password = '" . $pwd."'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }

  function get_row($usr, $pwd)
     {
          $sql = "select * from usertb where username = '" . $usr . "' and password = '" . $pwd."'";
          $query = $this->db->query($sql);
          return $query->row();
     }

  function unit_table(){
          $sql = "select * from usertb";
          $query = $this->db->query($sql);
          return $query->result_array();
  }

  function unit_editTable($ar){
          $this->db->where("id",$this->session->userdata('logged_in')["id"]);
          $this->db->update("usertb",$ar);
          redirect("mainPage","refresh");
  }

}
?>