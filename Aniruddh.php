  <?php
  
    defined("BASEPATH") or die("Not Allowed");
	
   class Aniruddh extends CI_COntroller
   {
	   
   function index($start=0)

{  
       
  $sid=$this->session->userdata("sid" );
  
   $data['news']=$this->Admin_Model->fetch_news();
   
             $this->load->view("all/header",$data);
			 
            $this->load->view("all/slider",$data);
        
		
				 $this->load->library('pagination');
				 
       $config['base_url'] = base_url().'index.php/Aniruddh/index/';
	   
      $config['total_rows'] = $this->Admin_Model->tot_news();
	  
     $config['per_page'] =2;
	 
     $this->pagination->initialize($config);
	 
       $data['pag']=$this->pagination->create_links();
	
				$data['news']=$this->News_Model->pub_news(2,$start);
				
				   $this->load->view("publicmain",$data);
		
			
         $this->load->view("all/footer");

      }
	  
     function about()
	 
      {
          $data['news']=$this->News_Model->fet_news();
		  
             $this->load->view("all/header",$data);
			 
            $this->load->view("all/slider");
		
            $this->load->view("about");
			
         $this->load->view("all/footer");


     }
	 
    function userm()
   {
	   
  $data['new']=$this->News_Model->fet_news();
  
             $this->load->view("all/header",$data);
			 
            $this->load->view("all/slider");
		
            $this->load->view("usermain",$data);
			
         $this->load->view("all/footer");	
	
   }
   }
   ?>