<!-- GITHUB -->

<!DOCTYPE html>
<head>
<title>UPDATE | BLOG</title>
		<?php echo anchor('index','Return',array('class'=>'link2'));?>
	<h1><b>Update</b></h1>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/resources/mycss.css">
	<script src="<?php echo base_url("resources/script1.js");?>"></script>
</head>

	<body bgcolor="whitesmoke">
	
	<?php echo form_open('', array('onSubmit'=>'return validate()','name'=>'form')); ?>
	<?php echo form_hidden('id', $entry_id) ?>
		
		Title:<br/><input type="text" name="title1" value="<?php echo $title ?>"/> <br/>
		Text:<br/> <textarea rows="8" cols="35" name="area"/> <?php echo $body ?> 	</textarea> <br/>
				   <input type="submit" name="submit1" value="Update" class="rbutton"/>

    <?php echo form_close(); ?>

</form>
</body>
</html>

