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
     	 $sql = "SELECT bookID,send,inid,author,unit,secret,speed,bookFile,subject,id,days  FROM booktb1  where inid like '%".$this->input->post("mess0")."%'  and  secret like '%".$this->input->post("mess20")."%' and  send like '%".$mess19."%'";
         $query = $this->db->query($sql);
         return $query->result_array();
		
     }
	    function get_transaction()
     {
        
          $bookID = $_GET['bookID'];
         $sql = "select transactionTB.actions, transactionTB.unit,transactiontb.acUnit, transactionTB.trandate,bookTb.send  FROM bookTB, transactionTB WHERE transactiontb.bookid = '".$bookID."'";
		 $query = $this->db->query($sql);
         return $query->result_array();
		
     }
	    function get_ResendPro()
     {
        
		     
         $bookID = $_GET['bookID'];
           $sql = "SELECT usertb.nameID,usertb.id,usertb.acroname, usertb.access FROM usertb WHERE (UserTB.access = 'u1' or UserTB.access = 'u2' or UserTB.access = 'u3' or UserTB.access = 'u4') and usertb.acroname <>'".$this->input->post("mess3")."'";
		 $query = $this->db->query($sql);
         return $query->result_array();
     }
	     function get_ResendPro1()
     {
        
		     
         $bookID = $_GET['bookID'];
         $sql = "SELECT usertb.nameID,usertb.id,usertb.acroname, usertb.access FROM usertb1 WHERE (UserTB.access = 'u1' or UserTB.access = 'u2' or UserTB.access = 'u3' or UserTB.access = 'u4') and usertb.acroname <>'".$this->input->post("mess3")."'";
		 $query = $this->db->query($sql);
         return $query->result_array();
		
     }
	  function get_reCome()
     {
	     $mess18 =$this->input->post("mess18");
         $mess19 =$this->input->post("mess19");
	     $mess20 =$this->input->post("mess20");
         $sql = "SELECT bookID,send,inid,author,unit,secret,speed,bookFile,subject,id,days  FROM booktb  where   send = 'Y'  and inid like '%".$this->input->post("mess18")."%'  and  secret like '%".$this->input->post("mess19")."%' ";
         $query = $this->db->query($sql);
         return $query->result_array();	
     }
	  function get_book()
     {
	   
         $sql = "SELECT booktb.bookID,booktb.unit,booktB.inid,booktb.speed,booktB.beginword,booktb.send,booktb.secret,booktb.id,booktb.author,booktb.days,booktb.subject,booktb.bookFile  FROM booktb,actiontb where booktb.bookID=actiontb.bookID and actiontb.status='".$this->session->userdata('logged_in')["username"]."' order by booktb.days desc";
		 $query = $this->db->query($sql);
         return $query->result_array();
				
     }


	   function get_co_upbook()
     { 
	   
         $sql = "SELECT booktb.bookID,booktb.unit,booktB.inid,booktb.speed,booktB.beginword,booktb.send,booktb.secret,booktb.id,booktb.author,booktb.days,booktb.subject,booktb.bookFile  FROM booktb,actiontb where booktb.bookID=actiontb.bookID and actiontb.status='".$this->session->userdata('logged_in')["username"]."' order by booktb.days desc";
		 $query = $this->db->query($sql);
         return $query->result_array();
				
     }
	 	 function get_editbook()
     { 
          $bookID = $this->input->post("mess0");

         $sql = "SELECT booktb.bookType,booktb.beginword,bookType,booktB.beginword,booktb.bookID,booktb.unit,booktB.inid,booktb.speed,booktb.send,booktb.secret,booktb.id,booktb.author,booktb.days,booktb.subject,booktb.bookFile  FROM booktb,actiontb where  booktb.bookID=actiontb.bookID and booktb.bookID='".$bookID."' and actiontb.status='".$this->session->userdata('logged_in')["username"]."' order by booktb.days desc";
		 $query = $this->db->query($sql);
         return $query->result_array();
     }
	     function get_upbook()
     {
         $bookID = $this->input->post("mess0");
         $sql = "SELECT booktb.bookType,booktb.beginword,bookType,booktB.beginword,booktb.bookID,booktb.unit,booktB.inid,booktb.speed,booktb.send,booktb.secret,booktb.id,booktb.author,booktb.days,booktb.subject,booktb.bookFile  FROM booktb,actiontb where  booktb.bookID=actiontb.bookID and booktb.bookID='".$bookID."' and actiontb.status='".$this->session->userdata('logged_in')["username"]."' order by booktb.days desc";
		 $query = $this->db->query($sql);
         return $query->result_array();
     }
	   function get_detailbook()
     {

		 $bookID =$_GET["bookID"];
         $sql = "SELECT booktb.bookType,booktb.beginword,bookType,booktB.beginword,booktb.bookID,booktb.unit,booktB.inid,booktb.speed,booktb.send,booktb.secret,booktb.id,booktb.author,booktb.days,booktb.subject,booktb.bookFile  FROM booktb,actiontb where  booktb.bookID=actiontb.bookID and booktb.bookID='".
		 $bookID."' and actiontb.status='".$this->session->userdata('logged_in')["username"]."' order by booktb.days desc";
		 $query = $this->db->query($sql);
         return $query->result_array();

     }
	   function get_user()
     {

         $sql = "SELECT usertb.nameID,usertb.id,usertb.acroname, usertb.access FROM usertb,actiontb where   usertb.username='".$this->session->userdata('logged_in')["username"]."'";
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


