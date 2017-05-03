

      <div class="content_area">
	  
      <div class="main_content floatleft">
	  
        <div class="left_coloum floatleft">
		
          <div class="single_left_coloum_wrapper">
		  
          <div class="container">
		  
            <h2 class="title">User News</h2>
		
            <table class="table">
			
            <tr>
            <th>S.no</th>
            <th>Title</th>
            <th>Date</th>
            <th>Image</th>
            <th>Action</th>
            </tr>
			
         <?php
		 
			$s=1;
			foreach($new as $a)
			{
			?>
            <tr>
            <td><?= $s;?></td>
			
            <td><?= $a['title'];?></td>
			
            <td><?= $a['dat'];?></td>
			
            <td><img src="<?= base_url();?>nist/atteche/<?= $a['img'];?>" width=50 height="50"</td>
			
            <td><?= anchor("user/edit_news/".$a['id'],"Edit");?> &nbsp; &nbsp;
			
          <?=anchor("user/delete_news/".$a['id'],"Delete");?></td>
		  
            </tr>
            <?php
			$s++;	
			}
			?> 
            </table>
        
            </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
    
   