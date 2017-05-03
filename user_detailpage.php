
 <div class="content_area">
 
      <div class="main_content floatleft">
	  
        <div class="left_coloum floatleft">
		
          <div class="single_left_coloum_wrapper">
		  
          <div class="container">
		  
            <h2 class="title">User News</h2>
		
            <table class="table">
            <tr>
			
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Question</th>
            <th>Answer</th>
			 <th>Join Date</th>
			 
            </tr>
         <?php
			$s=1;
			foreach($new as $a)
			{
			?>
            <tr>
            <td><?= $a['name'];?></td>
			
            <td><?= $a['age'];?></td>
			
			  <td><?= $a['city'];?></td>
			  
			    <td><?= $a['sq'];?></td>
				 
				 <td><?= $a['ans'];?></td>
				    <td><?= $a['date'];?></td>
         
          
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
     <div class="sidebar floatright">
	 
     <?php include("all/sidebar.php");?>
	 
     </div>
    </div>
    
   