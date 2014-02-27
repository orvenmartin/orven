<! DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/resources/mycss.css" />
	<?php echo anchor('/blog/index/','Return',array('class'=>'link2')); ?>
<center>
<h1> <b> <i> <font color="darkgray">WELCOME TO MY BLOG</font> </i> </b> </h1>
</head>

	<body bgcolor="whitesmoke">
	<div class="text">
	
	<?php
	foreach($view as $data) 
	{
		$id	   = $data->entry_id; 
		$title = $data->Title; 
		$body  = $data->Body; 
	?> 
	<p>
	<?php echo anchor('blog/guests',$title,array('class'=>'link'))?> <br/> </p>
			
	<?php
	} 
	?> 

<br>
<br>

</div>
</center>
</body>
</html>
