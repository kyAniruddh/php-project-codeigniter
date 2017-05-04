   <?php
   
   class News extends CI_Controller
     {
		 
    function addnews()
	
     {
		
	$sid=$this->session->userdata("sid" );
	
		$data['msg']="";
		
	extract($_POST);
	  if($sid!="")
	  {
		  
	if(isset($sub))
	{
		 $cat=$this->input->post('category');
		 
			 $tit=$this->input->post('title');
			 
			 $discp=$this->input->post('descript');
			 
			 $fn=$_FILES["att"]['name'];
			 
        $ext = pathinfo($fn, PATHINFO_EXTENSION);
		
	   $image_name=rand().".$ext";
	   
	 $config['upload_path']= './nist/atteche/';
	 
     $config['allowed_types']= 'gif|jpg|png';
	 
	 $config['file_name']= $image_name;
	 
     $this->load->library('upload', $config);
	 
	   if ( ! $this->upload->do_upload('att'))
		   
                {
				$data['msg']="Uploading Error";
				}
	   else
		   
	    {

    	if($this->News_Model->addnew($cat,$tit,$image_name,$descript,$sid))
			
			{
				
		  $data['msg']="Add news successfully";  
		  
		  }
	 }
		 
	}
	 
	
	 $this->load->view("all/header",$data);
	 
            $this->load->view("all/slider");
			
            $this->load->view("addnews",$data);
	
         $this->load->view("all/footer");
	
	
	  }


}	

        function single($id)
		
	   {
		   
		$data['news']=$this->Admin_Model->fetch_news();
		
		$si['news']=$this->News_Model->single_news($id);
		
		  $this->load->view("all/header",$data);
		  
            $this->load->view("single",$si);
	
         $this->load->view("all/footer");
		
	}
	
   function catnews($cat)
   
     {
		$data['new']=$this->News_Model->cat_news($cat);
		
	$data['news']=$this->Admin_Model->fetch_news();
	
		  $this->load->view("all/header",$data);
		  
		   $this->load->view("all/slider");
		   
            $this->load->view("catnew",$data);
	
         $this->load->view("all/footer"); 
	   
       }
	   
   function about_us()
   
      {
	   $data['news']=$this->Admin_Model->fetch_news();
	   
	  $this->load->view("all/header",$data);
	  
		   $this->load->view("all/slider");
		   
            $this->load->view("about");
	
         $this->load->view("all/footer");  
	   
     }
	 
    function gallary()
	
      {
		  
	   $data['news']=$this->Admin_Model->fetch_news();
	   
	  $this->load->view("all/header",$data);
	  
		   $this->load->view("all/slider");
		   
		$this->load->view("all/sidebar");
		
            $this->load->view("gallary");
	
         $this->load->view("all/footer");  
	   
      }
  
  function contactus()
  
   {
	$mes['msg']="";
	
    extract($_POST);
	
     if(isset($sub))
		 
     {
		 
	$to="aniruddhy90@gmail.com";
	
	$subject="project file";
	
	$massage="Nmae:$name \n Email:$email \n Mobile:$mobile\n Feedback:$feed";
	
	$headers="from:anniruddh yadav<aniruddhy90@gmail.com>";
	
	if(mail($to,$subject,$massage,$headers))
		
	{
		$mes['msg']="Send";
	}
	
	else
		
	{
			
			$mes['msg']="Not Send";
			
		}
	 
       }
	 
  $data['news']=$this->Admin_Model->fetch_news();
  
	  $this->load->view("all/header",$data);
	  
		   $this->load->view("all/slider");
		
            $this->load->view("adm/contactus",$mes);
	
         $this->load->view("all/footer");  
	   
   }
   

  }
    ?>