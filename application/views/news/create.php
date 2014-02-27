<html>
<body>

<h2>Create a news item</h2>

	<?php echo Validation_errors();?>
	<?php echo form_open('news/create')?>

		<label for ="title">Title</label>
		<input type="input" name="title"/> <br/>
		<label for="text">Text</label><br/>
		<textarea name="text"> </textarea> <br/>

		<input type="submit" name="submit" value="Create news item"/>
<?php echo form_close() ?>
</body>
</html>