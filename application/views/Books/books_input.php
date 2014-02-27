<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo "$base/$css"?>">
</head>
<body>

		<div id="header">
		<?php $this->load->view('books_header'); ?>
		</div>

			<div id ="menu">
			<?php $this->load->view('books_menu'); ?>
			</div>

				<?php echo heading($forminput,3) ?>
				<?php echo form_open('books/input'); ?>
				<?php echo form_hidden('id',$fid['value']); ?>


				<?php echo $title  		.':'. form_input($ftitle).br();     ?>
				<?php echo $author 		.':'. form_input($fauthor).br();    ?>
				<?php echo $publisher 	.':'. form_input($fpublisher).br(); ?>
				<?php echo $year		.':'. form_dropdown('year',$years).br(); ?>
				<?php echo $available   .':'. form_checkbox($favailable).br(); ?>
				<?php echo $summary		.':'. form_textarea($fsummary).br(); ?>

				<?php echo form_submit('mySubmit','Submit!');?>
				<?php echo form_close();?>

					<div id="footer">
					<?php  $this->load->view('books_footer'); ?>
					</div>
</body>
</html>