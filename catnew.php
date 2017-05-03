   
   <div class="content_area">
   
      <div class="main_content floatleft">
	  
        <div class="left_coloum floatleft">
		
          <div class="single_left_coloum_wrapper">
		  
          <div class="container">
		  
            <h2 class="title">Category type of News</h2>
			
           <?php
		   
			foreach($new as $a)
			{
			
			?>
            <p>
			
            <h1><?= $a['title'];?></h3>
			
            <h2>Category :<?= $a['cat'];?></h2>
			
			<h2>Image Name :<?= $a['img'];?></h2>
			
             <h3> Posted By : <?= $a['user'];?> On <?= $a['dat'];?></h3>
			 
             <p><img src="<?= base_url();?>nist/atteche/<?= $a['img'];?>" width=300 height=300/></p>
			 
             <p><?= $a['des'];?></p>
            
            </p>
            <?php	
			}
			?> 
            </div>
            </div>
          </div>
       
      </div>
     
    </div>
    
   