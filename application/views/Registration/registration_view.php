<html>
<head>
<title></title>
</head>
<body>

<div id="content">
<div class="signup_wrap">
<div class="signin_form">

	<?php echo form_open('user/login'); ?>
	
	<label for="email">Email: </label>
	<input type="text" id="email" name="email" value="" placeholder="enter email address"/>
	<label for="password">Password: </label>
	<input type="password" id="pass" name="pass" value="" placeholder="enter password" />
	<input type="submit" class="" value="Sign in" />
	
	<?php echo form_close(); ?>

</div>
</div>

<div class="reg_form">
<div class="form_title">SignUp </div>
<div class="form_sub_title">It's free and anyone can join</div>

	<?php echo validation_errors('<p class="error">'); ?>
	<?php echo form_open('user/registration');?>
<p>
<label for="user_name">UserName: </label>
<input type="text" id="user_name" name="user_name" value=" <?php set_value('user_name');?>"/>
</p>

<p>
<label for="email_address">Your Email: </label>
<input type="text" id="email_address" name="email_address" value=" <?php echo set_value('email_address'); ?>"/>
</p>

<p>
<label for="password">Password: </label>
<input type="password" id="password" name="password" value=" <?php echo set_value('password'); ?>"/>
</p>
<p>
<label for="con_password">Confirm Password: </label>
<input type="password" id="con_password" name="con_password" value=" <?php echo set_value('con_password'); ?>"/>
</p>

<p>
<input type="button" class="greenButton" value="Submit"/>
</p>

	<?php echo form_close(); ?>

</div>
</div>
	
</body>
</html>