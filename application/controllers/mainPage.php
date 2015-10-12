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

     public function newexbook()
     {
               if($this->session->userdata('logged_in'))
           {

                   if($this->input->post("mess1")!=null)
                  {

$this->db->distinct();
$this->db->select('inid');
$this->db->order_by("inid","ASC");
$temp = $this->db->get_where('booktb', array('send'=>'N','secret'=>$this->input->post("mess3"),'year'=>mdate("%Y",now()),'unit'=>$this->session->userdata('logged_in')["username"]));

                    $arBooktb=array(
                      "send"=>"N",
                      "inid"=>"",
                      "speed"=>$this->input->post("mess1"),
                      "bookType"=>$this->input->post("mess2"),
                      "secret"=>$this->input->post("mess3"),
                      "id"=>$this->input->post("mess5"),
                      "author"=>$this->input->post("mess6"),
                      "days"=>$this->input->post("mess7"),
                      "subject"=>$this->input->post("mess8"),
                      "beginword"=>$this->input->post("mess9")
                      );
                    $arActiontb=array();
                    $arTransactiontb=array(
                      "acUnit"=>$this->input->post("mess4")
                      );
                    $arReunit=array(
                      );

                    $this->db->insert("booktb".$ar);
                    $this->db->insert("booktb".$ar);
                    $this->db->insert("booktb".$ar);
                    $this->db->insert("booktb".$ar);

                    redirect("mainPage","refresh");
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

     public function logout()
     {
     $this->session->unset_userdata('logged_in');
     session_destroy();
     redirect('mainPage', 'refresh');
     }


}

