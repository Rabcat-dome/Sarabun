<?php
Class Book extends CI_Model
{
  function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     function get_rexCopy()
     {

	  $mess18 =$this->input->post("mess18");
      $mess19 =$this->input->post("mess19");
	  $mess20 =$this->input->post("mess20");
     	     $sql = "SELECT *  FROM booktb  where inid like '%".$this->input->post("mess18")."%'  and  secret like '%".$this->input->post("mess20")."%' and  send like '%".$mess19."%'";
          $query = $this->db->query($sql);
          return $query->result_array();
		
     }
	  function get_reCome()
     {


	  $mess18 =$this->input->post("mess18");
      $mess19 =$this->input->post("mess19");
	  $mess20 =$this->input->post("mess20");
      $sql = "SELECT *  FROM booktb  where   send = 'Y'  and inid like '%".$this->input->post("mess18")."%'  and  secret like '%".$this->input->post("mess19")."%' ";
          $query = $this->db->query($sql);
          return $query->result_array();
		
     }


	 function get_book()
     {
	   
         $sql = "SELECT booktb.bookID,booktb.unit,booktB.inid,booktb.speed,booktb.send,booktb.secret,booktb.id,booktb.author,booktb.days,booktb.subject,booktb.bookFile  FROM booktb,actiontb where booktb.bookID=actiontb.bookID and actiontb.status='".$this->session->userdata('logged_in')["username"]."' order by booktb.days desc";
		 $query = $this->db->query($sql);
         return $query->result_array();
				
     }






  function unit_editTable($ar){
          $this->db->where("id",$this->session->userdata('logged_in')["id"]);
          $this->db->update("usertb",$ar);
          redirect("mainPage","refresh");

  }

  function get_division(){
          $query = $this->db->get("typetb");
          return $query->result_array();
  }




}
?>


