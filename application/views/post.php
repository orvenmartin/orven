<!DOCTYPE html>
<head>
<title>Blog</title>
<?php echo anchor('blog/index','Return',array('class'=>'link2')) ?> 
		
<h1> <b> <font color="darkgray">Add Item</font> </b> </h1>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/resources/mycss.css">
<script src="<?php echo base_url("resources/script.js");?>"> </script>

</head>

<body bgcolor="whitesmoke">
<div id="popup"> 
			<?php echo form_open('',array('onSubmit'=>'return validate()','name'=>'form'));?> 
			<input type="hidden" name="act" value="create_post"><br /> 
			
	Title:<br/><input type="text" name="title" placeholder="Your title here"><br/>
				<br /> 
	Text:<br/><textarea name="text" rows="12" cols="50" placeholder="Your content here"></textarea><br />
				<br /> 
			  <input type="submit" name="submit" value="Post">
		
	<?php echo form_close(); ?>
</div>
</body>
</html>