
  <html>
   <head>

     <title>The News Reporter</title>
	 
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

     
    </div>
	
    <div class="main_menu_area">
	
      <ul id="nav">
	
        <li><?=anchor("admin/aaaaa","Home");?></li>	
		
		<li><a href="#">Category</a>
		
		<ul>
		<?php
		
		foreach($new as $a)
		{
			?>
			
			 <li><?= anchor("admin/acatnews/".$a['cat'],$a['cat']);?></li>
		
          <?php  
		}
		?>
		
	 </ul>
        </li>
		
            
			 <li><?=anchor("admin/logout","Logout");?></li>	
			 
			 <li><?=anchor("admin/a_news","AdminNews");?></li>	
			
	

   
	   </ul>
               
    </div>
	</html>