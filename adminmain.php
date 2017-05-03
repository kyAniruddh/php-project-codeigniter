
   <div class="content_area">
   
      <div class="main_content floatleft">
	  
        <div class="left_coloum floatleft">
		
          <div class="single_left_coloum_wrapper">
		  
          <div class="container">
		  
            <h2 class="title">Letest News</h2>
			
			<p>
			
			<?php
			
			foreach($new as $a)
			
			{
				?>
				
		<table border="3">
		
		<tr>
		<td>
			<h3><?php echo $a['title'];?></h3>
			
			<p> Posted By : <?= $a['user'];?> On <?= $a['dat'];?><br/>
			
			  <?= substr($a['des'],0,20)."..";?><br/>
			  
			     <?= anchor("Admin/adminsingle/".$a['id'],"Read More");?>
				 
		</td>
		
		<td>  <p style="color:red;"> <?=anchor("admin/add/".$a['id'],"Add");?>	&nbsp;&nbsp;
		
				
				  
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