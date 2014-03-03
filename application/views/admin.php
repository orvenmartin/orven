<!DOCTYPE html>
<head>
<title>BLOG|LOGIN</title>
<link rel="stylesheet" type="text/css" href=" <?php echo base_url(); ?>resources/css.css">
<script src="<?php echo base_url("resources/script2.js");?>"></script>
</head>

<body>
	
	<?php echo form_open('blog/process', array('onSubmit'=>'return validate()','name'=>'form')); ?> <br/>
		<input type="hidden" name="getname"s value="get_name"/>
		<div id="login">
		
		<h2> <span class="fontawesome-lock"> </span> Log In </h2>
			
		<fieldset>
		<div id="links">
		<?php echo anchor('blog/register','Register',array('class'=>'link'))?><?php echo anchor('blog/guests','View Posts',array('class'=>'link')) ?> <br/>
		</div>
				<p> <label for="username"> Username </label> </p>
				<p> <input type="text" id="username" name="username" placeholder="Username"> </p> 

				<p> <label for="password"> Password </label> </p>
				<p> <input type="password" id="password" name="password" placeholder="Password"> </p>
				<p>	<?php echo $msg; ?> </p>
				<p> <input type="submit" value="Log In" ></p>
					
			</fieldset>
	</div>	
		
	<?php echo form_close(); ?>
		
</form>
</body>
</html>

<!-- GITHUB -->