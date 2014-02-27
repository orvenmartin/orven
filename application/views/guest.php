<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/resources/mycss.css" />
<center>
 <h1> <b> <i> <font color="darkgray">WELCOME TO MY BLOG</font> </i> </b> </h1> 
</head>

<body bgcolor="whitesmoke">
<div class="text">

<?php
	foreach($bloggg as $data) 
	{
		$id	   = $data->entry_id; 
		$title = $data->Title; 
		$body  = $data->Body; 
?> 
		<p>
		<?php echo $title?> <br/> 
		<?php echo $body?> <br/> 
		</p>	    
<?php
	} 
?> 
<br>
<br>
	
	<?php echo anchor('/blog/logout_view/','Return',array('class'=>'link')); ?>

</div>
</center>
</body>
</html>
