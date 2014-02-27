<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<h1><b>REG</b></h1>
<script src="<?php echo base_url("resources/script.js");?>"></script>
</head>
<body>
<?php echo $form_open ?> 
<?php echo $form_hidden ?> 
<br /> 
Username: <br /><?php echo $form_user ?> 
<br /> 
Password:<br /><?php echo $form_pass ?> 
<br /> 
<?php echo $form_submit?>
</body>
</html>