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
	foreach($blog as $data) 
	{
		$id	   = $data->entry_id; 
		$title = $data->Title; 
		$body  = $data->Body; 
	?> 
	<p>
		
		<?php echo $title?> <br/> 
		<?php echo $body?> <br/> 
	</p>	
	
		<?php if($validated): ?>
		<?php echo anchor('/blog/update/'.$id,'Update',array('class'=>'link'));?><br/>
		<?php echo anchor('/blog/delete/'.$id,'Delete',array('class'=>'link'));?>
		<?php endif; ?>
	<?php
	} 
	?> 

<br>
<br>
</div>
</center>
</body>
</html>
