   
   <div class="content_area">
   
      <div class="main_content floatleft">
	  
        <div class="left_coloum floatleft">
		
          <div class="single_left_coloum_wrapper">
		  
          <div class="container">
		  
            <h2 class="title">News Details</h2>
			
            <?php
			
			foreach($news as $a)
			{
			?>
			
            <p>
            <h1><?= $a['a_title'];?></h3>
			
            <h2>Category :<?= $a['a_cat'];?></h2>
			
			<h2>Image Name :<?= $a['a_img'];?></h2>
			
             <h3> Posted By : <?= $a['a_user'];?> On <?= $a['dat'];?></h3>
			 
             <p><img src="<?= base_url();?>nist/atteche/<?= $a['a_img'];?>" width=300 height=300/></p>
			 
             <p><?= $a['a_des'];?></p>
            
            </p>
			<h2 style="color:red;"><?= anchor("Aniruddh/index/","<< Back");?></h2>
			
            <?php	
			}
			?>
			
            </div>
            </div>
          </div>
       
      </div>
     
    </div>
    
   