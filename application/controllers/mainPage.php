<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class MainPage extends CI_Controller {

	public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('date');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('book');
          $this->load->model('user');
     }

	public function index()
	{
  		  $username = $this->input->post("txt_username");
        $password = $this->input->post("txt_password");

          //set validations
          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('index');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                    //check if username and password is correct
                    $usr_result = $this->user->get_user($username, $password);
                    if ($usr_result > 0) //active user record is present
                    {
                         $usr_row = $this->user->get_row($username, $password);
                         //set the session variables
                         $sessiondata = array(
                              'id' => $usr_row->id,
                              'username' => $usr_row->username,
                              'password' => $usr_row->password,
                              'access' => $usr_row->access,
                              'name' => $usr_row->name,
                              'acroname' => $usr_row->acroname,
                              'nameID' => $usr_row->nameID,
                              'section' => $usr_row->section
                         );
                         $this->session->set_userdata('logged_in',$sessiondata);
                         redirect("mainPage/main");
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username or password!</div>');
                         redirect('mainPage/index');
                    }
               }
               else
               {
                    redirect('mainPage/index');
               }
          }

		
	}
		public function reunitAc()
	{
          if($this->session->userdata('logged_in'))
           {
			  
                $data = $this->session->userdata('logged_in');
                $data['bookin'] = $this->book->get_book();
				$data['bookin'] = $this->book->get_detailbook();
                $this->load->view('reunitAc',$data);
               
            }
            else
               {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
               }

		
	}

	public function main()
	{
          if($this->session->userdata('logged_in'))
           {
			  
                $data = $this->session->userdata('logged_in');
                $data['bookin'] = $this->book->get_book();
                $this->load->view('home',$data);
               
            }
            else
               {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
               }

		
	}
	public function reCopy()
	{
          if($this->session->userdata('logged_in'))
           {
			  
                $data = $this->session->userdata('logged_in');
                $data['bookin'] = $this->book->get_book();
                $this->load->view('reCopy',$data);
               
            }
            else
               {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
               }

		
	}
	
	public function reNew()
	{
          if($this->session->userdata('logged_in'))
           {
			  
                $data = $this->session->userdata('logged_in');
                $data['bookin'] = $this->book->get_book();
                $this->load->view('reNew',$data);
               
            }
            else
               {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
               }

		
	}

	public function makenew()
	{
          if($this->session->userdata('logged_in'))
           {
			  
                $data = $this->session->userdata('logged_in');
                $data['bookin'] = $this->book->get_book();
                $this->load->view('makenew',$data);
               
            }
            else
               {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
               }

		
	}


  public function unit()
  {
          if($this->session->userdata('logged_in'))
            {

                $data = $this->session->userdata('logged_in');
                $data['rs'] = $this->user->unit_table();
                $this->load->view('unit',$data);
                
            }
            else
            {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
            }

    
  }
   public function bookmain5()
  {
         if($this->session->userdata('logged_in'))
           {
			  
                $data = $this->session->userdata('logged_in');
              // $data['bookin'] = $this->book->get_book();
				$data['bookin'] = $this->book->get_detailbook();
                $this->load->view('bookmain5',$data);
               
            }
            else
               {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
               }

    
  }
     public function transaction()
  {
         if($this->session->userdata('logged_in'))
           {
			  
                $data = $this->session->userdata('logged_in');
                $data['bookin'] = $this->book->get_detailbook();
				$data['bookin_transaction'] = $this->book->get_transaction();
                $this->load->view('transaction',$data);
               
            }
            else
               {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
               }

    
  }

  public function editPass()
{
          if($this->session->userdata('logged_in'))
            {
                if($this->input->post('btsave')!=null)
                { 
                  $ar = array(
                    "name"=>$this->input->post("tname"),
                    "acroname"=>$this->input->post("tacroname"),
                    "nameID"=>$this->input->post("tnameid"),
                    "section"=>$this->input->post("tsection"),
                    "password"=>$this->input->post("tpassword")
                    );
                  $this->user->unit_editTable($ar);
                  redirect("mainPage","refresh");
                }else{
                $data = $this->session->userdata('logged_in');
                $data['rs'] = $this->user->get_row($this->session->userdata('logged_in')["username"],$this->session->userdata('logged_in')["password"]);
                $this->load->view('editPass',$data);}
            }
            else
            {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
            }


}

     public function bookinfo($bid){  //หน้าแสดงข้อมูลหนังสือ  ยังทำไม่เสร็จ
               if($this->session->userdata('logged_in'))
           {
                $data = $this->session->userdata('logged_in');
                //$data['bookin'] = $this->book->get_book();
                $this->load->view('viewInfo',$data);

            }
            else
               {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
               }
     }
     public function rexCopy()
     {


		
				 $data = $this->session->userdata('logged_in');
				 $data['bookin'] = $this->book->get_rexCopy();
			     $this->load->view('home',$data);
				  
	 }


     public function rexCome()
     {


		
				 $data = $this->session->userdata('logged_in');
				 $data['bookin'] = $this->book->get_reCome();
			     $this->load->view('home',$data);
				  
	 }

	 public function upbook()
     {
		    if($this->session->userdata('logged_in'))
           {
                $data = $this->session->userdata('logged_in');
                $data['bookin'] = $this->book->get_upbook();
                $this->load->view('upbook',$data);
            }
            else
            {
           redirect('mainPage', 'refresh');
            }	  
	 }
	  public function ResendPro()
     {
		    if($this->session->userdata('logged_in'))
           {
                $data = $this->session->userdata('logged_in');
                $data['bookin'] = $this->book->get_upbook();
                $this->load->view('ResendPro',$data);
            }
            else
            {
           redirect('mainPage', 'refresh');
            }	  
	 }
	  public function co_upbook()
     {
		    if($this->session->userdata('logged_in'))
           {
                $data = $this->session->userdata('logged_in');
                $data['bookin'] = $this->book->get_co_upbook();
                $this->load->view('co_upbook',$data);
            }
            else
            {
           redirect('mainPage', 'refresh');
            }	  
	 }
	  public function upload_form()
     {
		    if($this->session->userdata('logged_in'))
           {
                $data = $this->session->userdata('logged_in');
                $data['bookin'] = $this->book->get_co_upbook();
                $this->load->view('upload_form',$data);
            }
            else
            {
           redirect('mainPage', 'refresh');
            }	  
	 }
	  public function editbook()
     {
		    if($this->session->userdata('logged_in'))
           {
                $data = $this->session->userdata('logged_in');
                $data['bookin'] = $this->book->get_co_upbook();
                $this->load->view('editbook',$data);
            }
            else
            {
           redirect('mainPage', 'refresh');
            }	  
	 }
	public function do_upload()
	 {
		$bookid= $_POST['bookid'];
		$config['file_name'] = "Up".$bookid.$this->session->userdata('logged_in')["username"];
		$config['upload_path'] = './application/uploads/';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']	= '100000';
        
		

			$this->db->where('bookID', $bookid);
	
			$status_bookFile = $config['file_name'].".pdf";
			//$this->db->where('status', $status_actionTB);

            $data_bookFile=array( "bookFile"=>$status_bookFile,);
			$this->db->update('booktb', $data_bookFile); 
		

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			    $data = $this->session->userdata('logged_in');
				$data['bookin'] = $this->book->get_detailbook();
                $this->load->view('bookmain5',$data);
               
		}
		else
		{
			    $data = $this->session->userdata('logged_in');
				$data['bookin'] = $this->book->get_detailbook();
                $this->load->view('bookmain5',$data);
               
		}

	}
     public function receive()
     {
	  $array= $this->input->post("BookID");
	
     
	  $status_actionTB = $this->session->userdata('logged_in')["username"];
	  $data_actionTB=array( "Status"=>$status_actionTB,);
	  foreach ($array as $row)
            {

		
             //------------------------------At Update table bookTB status ---------

            
								$this->db->where('bookID', $row);
								$this->db->where('status', $status_actionTB);
								$this->db->update('actionTB', $data_actionTB); 

		     //-------------------------At Update table bookTB Locals ------------
			$query = $this->db->query("SELECT * FROM bookTB where BookID='".$row."'");
                         foreach ($query->result() as $row_unit)
                                 {
                                  $unit =$row_unit->unit;
								  $Locals_bookTB=array( "Locals"=>$unit,);
								  $this->db->where('bookID',  $row);
								  $this->db->update('bookTB', $Locals_bookTB); 
                    	//------------------------------At insert table ReUnit --------------------
								  $this->db->distinct();
								  $arBooktb=array(
								  "bookID"=>$row,
							      "unit"=>$unit,
								  "redate"=>NOW(),
									  
                                   );
				                 $this->db->insert('reunit',$arBooktb);

                                  }
					 
          
			}
       
					 redirect("mainPage/main","refresh");
		
							
				

	           }



     public function newexbook()
     {
               if($this->session->userdata('logged_in')!=null)
           {
                   if($this->input->post("mess1")!=null)
                  {

$this->db->distinct();
$this->db->select('*');
$this->db->order_by("inid","ASC");
$temp = $this->db->get_where('booktb', array('send'=>'N','secret'=>$this->input->post("mess3"),'years'=>mdate("%Y",now()),'unit'=>$this->session->userdata('logged_in')["username"]));

                    $arBooktb=array(
                      "send"=>"N",
                      "inid"=>"",
                      "speed"=>$this->input->post("mess1"),
                      "bookType"=>$this->input->post("mess2"),
                      "secret"=>$this->input->post("mess3"),
                      "id"=>$this->input->post("mess5"),
                      "author"=>$this->input->post("mess6"),
                      "days"=>$this->input->post("example1"),
                      "subject"=>$this->input->post("mess8"),
                      "beginword"=>$this->input->post("mess9")
                      );

					  $this->db->insert('booktb',$arBooktb);

	//------------------------------------ insert ActionTB------------------------------------------

					  $query = $this->db->query("SELECT * FROM bookTB");
                      foreach ($query->result() as $row_unit)
                                 {
                                  $arbookID =$row_unit->bookID;
                                 }
					  $logged_in	= $this->session->userdata('logged_in')['username'];
					  $arActionTB=array(
                      "actionID"=>$arbookID."".$logged_in,
                      "bookID"=>$arbookID,
                      "Status"=>$this->session->userdata('logged_in')['username'],
                        );										
				      $this->db->insert('ActionTB',$arActionTB);


//------------------------------------ insert ReUnit------------------------------------------

					  $query = $this->db->query("SELECT * FROM bookTB");
                      foreach ($query->result() as $row_unit)
                                 {
                                  $arbookID =$row_unit->bookID;
                                 }
					  $logged_in	= $this->session->userdata('logged_in')['username'];
					  $arReUnit=array(
                      "bookID"=>$arbookID,
                      "unit"=>$this->input->post("mess4"),
                        );										
				      $this->db->insert('home',$arReUnit);


  //-------------------------------------  insert TransactionTB--------------------------------


                      $query = $this->db->query("SELECT * FROM bookTB");
                      foreach ($query->result() as $row_unit)
                                 {
                                  $arbookID =$row_unit->bookID;
								//  $arUnit =$row_unit->unit;
                                 }

					  $logged_in	= $this->session->userdata('logged_in')['username'];
					  $arTransactionTB=array(
                      "bookID"=>$arbookID,
                      "Actions"=>"รับ",
					  "acUnit"=>$this->input->post("mess4"),
					  "trandate"=>now(),
                        );										
				      $this->db->insert('TransactionTB',$arTransactionTB);


                   

                    $arReunit=array(
                      );

                   
                  

                    redirect("mainPage/main","refresh");
                    exit();
                  
				  }
                $data = $this->session->userdata('logged_in');
                //$data['bookin'] = $this->book->get_book();
                $data['rs'] = $this->book->get_division();
                $this->load->view('reNew',$data);

            }
            else
               {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
               }
      }

     public function oldexbook()
     {
               if($this->session->userdata('logged_in'))
           {

                $data = $this->session->userdata('logged_in');
                //$data['bookin'] = $this->book->get_book();
                $this->load->view('reCopy',$data);
                
            }
            else
               {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
               }
      }

     public function unitAction()
     {
               if($this->session->userdata('logged_in'))
           {

                $data = $this->session->userdata('logged_in');
                //$data['bookin'] = $this->book->get_book();
                $this->load->view('unitAction',$data);
                
            }
            else
               {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
               }
      }

     public function backexbook()
     {
               if($this->session->userdata('logged_in'))
           {

                $data = $this->session->userdata('logged_in');
                //$data['bookin'] = $this->book->get_book();
                $this->load->view('reOut',$data);
                
            }
            else
               {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
               }
      }

     public function backinbook()
     {
               if($this->session->userdata('logged_in'))
           {

                $data = $this->session->userdata('logged_in');
                //$data['bookin'] = $this->book->get_book();
                $this->load->view('reCome',$data);
                
            }
            else
               {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
               }
      }

     public function outinbook()
     {


               if($this->session->userdata('logged_in'))
           {

                   if($this->input->post("mess1")!=null)
                  {

$this->db->distinct();
$this->db->select('inid');
$this->db->order_by("inid","ASC");
$temp = $this->db->get_where('booktb', array('send'=>'N','secret'=>$this->input->post("mess3"),'years'=>mdate("%Y",now()),'unit'=>$this->session->userdata('logged_in')["username"]));
                   
				    $arBooktb=array(
                      "send"=>"N",
                      "inid"=>"",
                      "speed"=>$this->input->post("mess1"),
                      "bookType"=>$this->input->post("mess2"),
                      "secret"=>$this->input->post("mess3"),
                      "id"=>$this->input->post("mess5"),
                      "author"=>$this->input->post("mess6"),
                      "days"=>$this->input->post("example1"),
                      "subject"=>$this->input->post("mess8"),
                      "beginword"=>$this->input->post("mess9")
                      );

					  $this->db->insert('booktb',$arBooktb);

					  	//------------------------------------ insert ActionTB------------------------------------------

					  $query = $this->db->query("SELECT * FROM bookTB");
                      foreach ($query->result() as $row_unit)
                                 {
                                  $arbookID =$row_unit->bookID;
                                 }
					  $logged_in	= $this->session->userdata('logged_in')['username'];
					  $arActionTB=array(
                      "actionID"=>$arbookID."".$logged_in,
                      "bookID"=>$arbookID,
                      "Status"=>$this->session->userdata('logged_in')['username'],
                        );										
				      $this->db->insert('ActionTB',$arActionTB);


//------------------------------------ insert ReUnit------------------------------------------

					  $query = $this->db->query("SELECT * FROM bookTB");
                      foreach ($query->result() as $row_unit)
                                 {
                                  $arbookID =$row_unit->bookID;
                                 }
					  $logged_in	= $this->session->userdata('logged_in')['username'];
					  $arReUnit=array(
                      "bookID"=>$arbookID,
                      "unit"=>$this->input->post("mess4"),
                        );										
				      $this->db->insert('ReUnit',$arReUnit);


  //-------------------------------------  insert TransactionTB--------------------------------


                      $query = $this->db->query("SELECT * FROM bookTB");
                      foreach ($query->result() as $row_unit)
                                 {
                                  $arbookID =$row_unit->bookID;
								//  $arUnit =$row_unit->unit;
                                 }

					  $logged_in	= $this->session->userdata('logged_in')['username'];
					  $arTransactionTB=array(
                      "bookID"=>$arbookID,
                      "Actions"=>"ออกหนังสือ",
					  "acUnit"=>$this->input->post("mess4"),
					  "trandate"=>now(),
                        );										
				      $this->db->insert('TransactionTB',$arTransactionTB);


                    $arActiontb=array();
                    $arTransactiontb=array(
                      "acUnit"=>$this->input->post("mess4")
                      );
                    $arReunit=array(
                      );

                    
                   

                   redirect("mainPage/main","refresh");
                    exit();
                  }

                $data = $this->session->userdata('logged_in');
                //$data['bookin'] = $this->book->get_book();
                $data['rs'] = $this->book->get_division();
                $this->load->view('makenew',$data);

            }
            else
               {
                //If no session, redirect to login page
                redirect('mainPage', 'refresh');
               }
      }


     public function logout()
     {
     $this->session->unset_userdata('logged_in');
     session_destroy();
     redirect('mainPage', 'refresh');
     }


}


