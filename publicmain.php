

   <div class="content_area">
   
      <div class="main_content floatleft">
	  
        <div class="left_coloum floatleft">
		
          <div class="single_left_coloum_wrapper">
		  
          <div class="container">
		  
            <h2 class="title">Letest News</h2>
			<p>
			
			<?php
			foreach($news as $a)
			{
				?>
			  </p>
			  
			<h3><?php echo $a['a_title'];?></h3>
			
			<p> Posted By : <?= $a['a_user'];?> On <?= $a['dat'];?><br/>
			
			  <?= substr($a['a_des'],0,20)."..";?><br/>
			  
			     <?= anchor("admin/adminsingle/".$a['a_id'],"Read More");?>
				 
				<p>
				<?php
			}
           ?>
         
            
           <?= $pag;?>
            </div>
          </div>
        </div>
      </div>
        <div class="sidebar floatright">
        <?php include("adm/adminsidebar.php");?>
     </div>
    </div>