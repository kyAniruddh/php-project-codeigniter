<?php

  error_reporting(0);
  class User extends CI_Controller

   {
	   
   function register()
   
   
    {
	$data['news']=$this->Admin_Model->fetch_news();
	$data['msg']="";
	extract($_POST);
	    if(isset($sub))
			
	     {
			 
		if($cap1==$cap)
		{
		  if($this->User_Model->regis($uid,$pass,$name,$age,$city,$sq,$ans))
		  {
			  
			  $data['msg']="Data Registered";
		  }
		  
		  else
		  {
			   $data['msg']="Data Not Registered"; 
		  }
		}
		
		else
		{
			
			   $data['msg']="Please Fill Correct captcha"; 
		}
		
	}
	
	$this->load->view("all/header",$data);
            $this->load->view("all/slider");
 
            $this->load->view("register",$data);
			
         $this->load->view("all/footer");
}


function logi()

{
	$data['news']=$this->Admin_Model->fetch_news();	
		
		$data['msg']="";
	extract($_POST);
	if(isset($sub))
	{
		$s=$this->User_Model->login($uid);
	
		if(!empty($s))
		{
			if($pass==$s[0]['password'])
			{
				$this->session->set_userdata("sid",$uid);
				redirect("Aniruddh/userm");
				
			}
			
			else
			{
				  $data['msg']="Inter correct Password"; 
			}
			
		}
		
		else
		{
			  $data['msg']="Not Register User Here"; 
		}
	}

          $this->load->view("all/header",$data);
		  
            $this->load->view("all/slider");
			
            $this->load->view("login",$data);
			
         $this->load->view("all/footer");
      }
	  
    function logout()
	
        {
	$this->session->sess_destroy();
	
	redirect("Aniruddh");
	
}

  function delete_news($id)
  
   {
	
	$this->User_Model->dele($id);
	
		redirect("Aniruddh/userm");
    }
	
    function user_detail($uid)
	
    {
	
	$d['new']=$this->User_Model->u_detail($uid);
	
	$this->load->view("all/header");
	
	$this->load->view("all/slider");
	
	$this->load->view("user_detailpage",$d);
	
	$this->load->view("all/footer");
		
   }
   
     function edit_news($id)
	 
  {
	$data['msg']="";
	
	extract($_POST);
	if(isset($sub))
	{
		
		  if($this->User_Model->upda($category,$title,$des,$id))
		  {
			  
			redirect("news");
			 
		  }
		  else
		  {
			   $data['msg']="Not updated"; 
		  }
	
		
		
	}

	$d['new']=$this->User_Model->news_edit($id);
	
	$this->load->view("all/header");
	
	$this->load->view("all/slider");
	
	$this->load->view("editnews",$d);
	
	$this->load->view("all/footer");

   }

  }
   ?>