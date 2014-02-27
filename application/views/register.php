<!DOC type html>
<title>REGISTER</title>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/resources/css2.css">
<script src="<?php echo base_url("resources/script3.js");?>"></script>
</head>

<body>

	<?php echo form_open('', array('onSubmit'=>'return validate()','name'=>'form')); ?>
	
	<input type="hidden" name="reg" value="register">

	<div id="login">
		<h2><span class="fontawesome-lock"></span>Register</h2>
		<fieldset>
		
				<p><label for="lastname">Firstname</label></p>
				<p><input type="text" id="firstname" name="firstname" placeholder="Your Firstname"></p> 

				<p><label for="lastname">Lastname</label></p>
				<p><input type="text" id="lastname" name="lastname" placeholder="Your Lastname"></p>
				
				
				<p><label for="username">Username</label></p>
				<p><input type="text" id="username" name="userame" placeholder="Your Username"></p>
				
				
				<p><label for="password">Password</label></p>
				<p><input type="password" id="password" name="password" placeholder="Your Password"></p>
				
				
				<?php echo anchor('blog/login','Return',array('class'=>'link2')); ?>
				
				<p><input type="submit" value="Register"></p>
					
			</fieldset>
	</div> <!-- end login -->
								
	
	
	
	<?php echo form_close(); ?>


</body>
</html>