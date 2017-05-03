  
  <?php

   $sid=$this->session->userdata("sid");


   ?>

  <html>
  
    <head>

   <title> News Reporter</title>
   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>nist/assets/font/font-awesome.min.css" />
  
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>nist/assets/font/font.css" />
	
   <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>nist/assets/css/bootstrap.min.css" media="screen" />
   
   <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>nist/assets/css/style.css" media="screen" />
   
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>nist/assets/css/responsive.css" media="screen" />
	
     <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>nist/assets/css/jquery.bxslider.css" media="screen" />

   </head>
   <body>
   
    <div class="body_wrapper">
	
    <div class="center">
	
    <div class="header_area">
	
      <div class="logo floatleft"><a href="#"><img src="<?= base_url(); ?>nist/images/logo.png" alt="" /></a></div>

      <div class="social_plus_search floatright">
	  
        <div class="social">
          <ul>
            <li><a href="#" class="twitter"></a></li>
			
            <li><a href="#" class="facebook"></a></li>
			
            <li><a href="#" class="feed"></a></li>
			
          </ul>
		
        </div>
        <?php
		
		  if($sid=="")
		  {
			  ?>
			   
			  <?php
			  
		  }
		  ?> 
      </div>
       </div>
      <div class="main_menu_area">
	
      <ul id="nav">
	  <?php
	  if($sid=="")
	  {
		  ?>
        <li><a href="<?= base_url(); ?>">Home</a></li>
		
		<li><a href="#">Category</a>
		
		<ul>
		<?php
		
		foreach($news as $a)
		{
			?>
			
			 <li><?= anchor("news/catnews/".$a['a_cat'],$a['a_cat']);?></li>
		
          <?php  
		}
		?>
	 </ul>
	 
        </li>
		 <li><?= anchor("news/about_us","About Us");?></li>
		 
		  <li><?=anchor("user/logi","Login");?></li>
		  
		  <li><?=anchor("user/register","Register");?></li>
		  
		 <li><?=anchor("news/gallary","Gallary");?></li>
		 
            <li><?=anchor("news/contactus","Contact Us");?></li>	
			
			 <li><?=anchor("admin/admina","Admin");?></li>	
			
	  <?php
	  
	  
	  }
	  else
	  {
?>	

    <li><a href="<?= base_url(); ?>">Home</a></li>
	
		 <li><?= anchor("News/addnews","Add news");?></li>
		   
		    <li><?= anchor("user/logout","Logout");?></li>
			
			<li><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"?></li>
	
			<li><?= anchor("user/user_detail/","Welcome:".$sid,$sid);?></li>
			
<?php
	  }
		
?>
              </ul>
               
    </div>
	</html>