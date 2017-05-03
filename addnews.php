   <html>
   
    <h1>Add News Here</h1>
	
    <p><?=$msg;?></p>
	
<div class="container">

  <div class="form-group">

  <?=form_open_multipart('News/addnews');?>

  <div class="form-group">
  
   <?=form_label('Category');?>
   
  <?php 
  
   $option=array(
  'Sports'=>'Sports','Intertenment'=>'Intertenment','Woolywood'=>'woolywood','Whether'=>'Whether','International'=>'International');
   $cl='class="form-control"';

   echo form_dropdown('category',$option,$cl);
   
  ?>

   </div>
    <div class="form-group">
	
    <?=form_label('Title');?>
	
    <?= form_input('title','',['placeholder'=>'Enter Title','class'=>'form-control']); ?>
	
    </div>
   <div class="form-group">
   
    <?=form_label('Description');?>
	
   
   <?=form_textarea('descript','',['placeholder'=>'Enter description','class'=>'form-control']);?>
   
   </div>
   
    <div class="form-group">
	
   <?=form_label('Image')?>
   
   <?=form_upload('att','',['class'=>'form-control']);?>
   
    </div>
	
    <div class="form-group">
	
   <?=form_submit('sub','submit',['class'=>'btn btn-success']);?>
   
  </div>
   </div>

 
   </html>