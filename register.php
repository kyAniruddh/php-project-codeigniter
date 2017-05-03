  
  <div>
  <h1>
   Register Here

   </h1>
   
   <label><?=$msg; ?></label>
   
   <div class="container">
   
    <form method="post" class="form-group">
	
     <label>Uid</label>
	 
    <input type="text" name="uid" class="form-control">
	
    <label>Password</label>
	
    <input type="password" name="pass" class="form-control">
	
   <label>Name</label>
   
    <input type="text" name="name" class="form-control">
	
    <label>Age</label>
	
    <input type="text" name="age" class="form-control">
	
    <label>City</label>
	
    <input type="text" name="city" class="form-control">
	
     <label>Sq</label>
	 
    <select name="sq" class="f orm-control">
	
     <option value="What is your pet name?">What is your pet name? </option>
	 
       <option value="What is your fev movie?">What is your fev movie? </option>
	   
      </select>
	  
    <label>Answer</label>
	
    <input type="text" name="ans" class="form-control" />

          <div class="form-group">
		  
        <label><?php
		
        $vals = array(
        'img_path'      => './captcha/',
        'img_url'       => base_url().'captcha/',
        'img_width'     => '200',
        'img_height'    => 40,
        'expiration'    => 7200,
        'word_length'   => 4,
        'font_size'     => 32,
        'img_id'        => 'Imageid',
        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

        // White background and border, black text and red grid
		
        'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
        )
    );

    $cap = create_captcha($vals);
   echo $cap['image'];	
		?>
        </label>
        <input type="hidden" name="cap1" value="<?= $cap['word'];?>"/>
		
        <input type="text" name="cap" class="form-control"/>
		
          </div>

      <input type="submit" name="sub" value="submit" class="btb btn-success" />
    </div> 
    </div>
