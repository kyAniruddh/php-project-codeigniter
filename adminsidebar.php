 <div class="sidebar floatright">
       
        
       
		  <?php
		  foreach($news as $a)
		  {
			
			?>
			 <div class="single_sidebar">
          <div class="popular">
			
			<h2 class="title">Popular</h2>
            <ul>
              <li>
                <div class="single_popular">
				
                  <p><?=$a['dat'];?></p>
				  
                  <h3><?=$a['a_des'];?><?= anchor("News/single/".$a['a_id'],"Read More");?></a></h3>
				  
                </div>
             
            </ul>
			
            <a class="popular_more">more</a>
			
			</div>
        </div>
       
 
    <?php			
		  }
		  ?>
        </div>    
 