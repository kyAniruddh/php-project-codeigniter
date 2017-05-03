
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
				
		<table border="3">
		
		<tr>
		<td>
			<h3><?php echo $a['a_title'];?></h3>
			
			<p> Posted By : <?= $a['a_des'];?> On <?= $a['dat'];?></p><br/>
			
			  <p><?= substr($a['a_user'],0,20)."..";?> </p><br/>
			  
			    
				 
		</td>
		<td>  
				  <?=anchor("admin/del/".$a['a_id'],"Delete");?></p>
      </td>
		</tr>
				</table>
				<?php
			}
           ?>
         
            
           
            </div>
          </div>
        </div>
      </div>
     
    </div>