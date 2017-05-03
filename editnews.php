  <html>
  
   <h1>Edit News Here</h1>
   
   <p><?=$msg;?></p>
   
  <div class="container">

   <div class="form-group">
   <?php
   
   foreach($new as $a)
   
   {

  }
  
   ?>

    <?=form_open_multipart('');?>
	
    <div class="form-group">
	
     <?=form_label('Category');?>
	 
   <?= form_input('category',$a['cat'],['class'=>'form-control']); ?>
   
   </div>
    
    <div class="form-group">
	
    <?=form_label('Title');?>
	
   <?= form_input('title',$a['title'],['class'=>'form-control']); ?>
   
   </div>
   
    <div class="form-group">
	
    <?=form_label('Description');?>
	
   <?=form_textarea('des',$a['des'],['class'=>'form-control']);?>
   
    </div>

    <div class="form-group">
	
    <?=form_submit('sub','submit',['class'=>'btn btn-success']);?>
	

   </div>
   </div>

   </div>
    </html>