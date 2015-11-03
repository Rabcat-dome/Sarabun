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
     	 $sql = "SELECT bookID,send,inid,author,unit,secret,speed,bookFile,subject,id,days  FROM booktb  where inid like '%".$this->input->post("mess0")."%'  and  secret like '%".$this->input->post("mess20")."%' and  send like '%".$mess19."%'";
         $query = $this->db->query($sql);
         return $query->result_array();
		
     }

		


	 function get_rsearch()
     {

	     $mess18 =$this->input->post("mess18");
         $mess19 =$this->input->post("mess19");
	     $mess20 =$this->input->post("mess20");
     	 $sql = "SELECT bookID,send,inid,author,unit,secret,speed,bookFile,subject,id,days  FROM booktb  where inid like '%".$this->input->post("mess0")."%'  and  secret like '%".$this->input->post("mess20")."%' and  send like '%".$mess19."%'";
         $query = $this->db->query($sql);
         return $query->result_array();
		
     }

	 function get_info()
     {

     	 $sql = "SELECT bookTB.bookID, bookTB.send, booktb.unit,bookTb.speed, bookTB.inid,  bookTB.author,  bookTB.id,  bookTB.subject,   bookTB.secret, bookTB.days, bookTB.bookFile,  bookTB.ID, bookTB.Secret, bookTB.Author, bookTB.Days, bookTB.Subject, bookTB.bookFile FROM bookTB where booktb.info='' ";
         $query = $this->db->query($sql);
         return $query->result_array();
		
     }

	  function get_search()
     {

	     $search_year =$this->input->post("search_year");      // ปี
         $search_outin =$this->input->post("search_outin");    // หนังสือภายใน/ภายนอก
	     $search_id =$this->input->post("search_id");          // ที่
		 $search_send =$this->input->post("search_send");      // หนังสือรับ/ส่ง
         $search_type =$this->input->post("search_type");      // ประเภทความลับ
	     $search_secret =$this->input->post("search_secret");  // ชั้นความลับ
		 $search_author =$this->input->post("search_author");  // ชั้นความลับ
         $search_date =$this->input->post("search_date");      // วันที่
	     $search_subject =$this->input->post("search_subject");  // หัวเรื่อง
		 $search_beginword =$this->input->post("search_beginword"); //คำขึ้นต้น
         $search_ddate =$this->input->post("search_ddate");    //วันที่รับ/ส่ง
	     $search_tddate =$this->input->post("search_tddate");   //ถึง
		 $search_signer =$this->input->post("search_signer");   // ลงนาม
      
     
		 if($search_signer==""){
		  $sql = "SELECT bookTB.* FROM bookTB where years like '%". $search_year."%'  and  unit like '%".$search_outin."%' and  id like '%".$search_id."%'  and  send like '%".$search_send."%'  and  bookType like '%".$search_type."%' and  id like '%".$search_secret."%' and  id like '%".$search_id."%' and  subject like '%".$search_subject."%' and  beginword like '%".$search_beginword."%' and  datein like '%".$search_ddate."%' and  datein BETWEEN '".$search_ddate."' and '".$search_tddate."'" ;
		 }
		 if($search_signer!=""){
		  $sql = "SELECT bookTB.*, signTB.signer FROM bookTB RIGHT JOIN signTB ON bookTB.bookID = signTB.bookid where years like '%". $search_year."%'  and  unit like '%".$search_outin."%' and  id like '%".$search_id."%'  and  send like '%".$search_send."%'  and  bookType like '%".$search_type."%' and  id like '%".$search_secret."%' and  id like '%".$search_id."%' and  subject like '%".$search_subject."%' and  beginword like '%".$search_beginword."%' and  datein like '%".$search_ddate."%' and  datein BETWEEN '".$search_ddate."' and '".$search_tddate."'" ;
		 }
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


  

	   function get_relist3_null()
		  
     {
         $sql = "SELECT transactionTB.bookid, transactionTB.unit,transactionTB.acUnit, transactionTB.actions, transactionTB.trandate, bookTB.bookID, bookTB.send, bookTB.secret, booktb.speed, booktb.subject, booktb.subject, booktb.id, booktb.author, booktb.days, bookTB.secret, bookTB.INID, bookTB.ID, bookTB.Secret, bookTB.Author, bookTB.Days, bookTB.Subject, bookTB.bookFile FROM actionTB,bookTB,transactionTB where booKtb.booKid=ActionTB.booKid and booKtb.booKid=transactionTB.booKid  order by bookTb.inid";
		 $query = $this->db->query($sql);
         return $query->result_array();		
     }
	    function get_relist3()
		  
     {
         $sql = "SELECT * FROM `ActionTB` m,`booktb` l LEFT JOIN `transactiontb` r ON r.`bookID` = l.`bookID` WHERE r.`bookID` IS NULL and l.`bookID` =  m.`bookID`";
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
	     function get_unitaction()
     {
       
    
           $sql = "SELECT ActionTB.bookID,bookTB.ID,bookTB.bookFile,bookTB.id,bookTB.author,booktb.unit,bookTb.speed,bookTB.INID,bookTb.secret,booKTB.send,bookTB.Author,bookTB.days,bookTB.subject,bookTb.bookfile  FROM bookTB,ActionTB where BookTB.BookID=ActionTB.bookID  and actiontb.status='".$this->session->userdata('logged_in')["username"]."' order by booktb.days desc";
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
	   function get_reCome_send()
     {
	     $mess18 =$this->input->post("mess18");
         $mess19 =$this->input->post("mess19");
	     $mess20 =$this->input->post("mess20");
         $sql = "SELECT bookID,send,inid,author,unit,secret,speed,bookFile,subject,id,days  FROM booktb  where   send = 'N'  and inid like '%".$this->input->post("mess18")."%'  and  secret like '%".$this->input->post("mess19")."%' ";
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


