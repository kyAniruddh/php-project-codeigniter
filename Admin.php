
   <?php

   class Admin extends CI_Controller

  {
	  
  function admina()
  
   {
		$data['new']=$this->News_Model->fet_news();	
		
		$data['msg']="";
		
	extract($_POST);
	
	if(isset($sub))
	  {
		$s=$this->Admin_Model->adminlogin();
	
		if(!empty($s))
			
		{
			if($pass==$s[0]['pass'])
				
			{
				redirect("admin/aaaaa");
				
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
	
	$data['news']=$this->Admin_Model->fetch_news();
	
	$this->load->view("all/header",$data);
	
	$this->load->view("all/slider");
	
	$this->load->view("adm/login",$data);
	
	$this->load->view("all/footer");
	
   }
   
    function aaaaa()
   {
	   
	$da['new']=$this->News_Model->fet_news();
	
	$this->load->view("adm/adminheader",$da);
	
	$this->load->view("all/slider");
	
	$this->load->view("adm/adminmain",$da);
	
	$this->load->view("all/footer");
	
     }
 
   function add($id)
   
  {
	
      $d=$this->Admin_Model->aadd($id);
  
      $this->Admin_Model->inser($d[0]['id'],$d[0]['title'],$d[0]['des'],$d[0]['user'],$d[0]['img'],$d[0]['cat']);
	  
	  redirect("admin/aaaaa");
	  
    }

    function del($id)
	
  {
	  
    $this->Admin_Model->adel($id);	
	
    redirect("admin/a_news");

}
     function logout()
	 
  {
	  
	  redirect("Aniruddh");
  }
  
   function adminsingle($id)
   
	{
		$data['news']=$this->Admin_Model->fetch_news();
		
		$si['news']=$this->Admin_Model->single_news($id);
		
		  $this->load->view("all/header",$data);
		 
            $this->load->view("adm/admsingle",$si);
	
         $this->load->view("all/footer");

    }
	
     function a_news()
	 
    {
		$da['new']=$this->News_Model->fet_news();
		
		$data['news']=$this->Admin_Model->fetch_news();
		
		  $this->load->view("adm/adminheader",$da);
		 
            $this->load->view("adm/alladminnews",$data);
	
         $this->load->view("all/footer");
	   }
	   
	   function acatnews($cat)
	   {
		   
		   $data['new']=$this->News_Model->cat_news($cat);
		
	$data['news']=$this->Admin_Model->fetch_news();
	
		  $this->load->view("adm/adminheader",$data);
		  
		   $this->load->view("all/slider");
		   
            $this->load->view("catnew",$data);
	
         $this->load->view("all/footer"); 
	   }
   }
   
      ?>