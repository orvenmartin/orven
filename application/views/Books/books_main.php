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

	<h3>List of Books</h3>
	<?php //echo $table ?>
	<table border="1">
	<tr>
	<th>ID</th>
	<th>Title</th>
	<th>Author</th>
	<th>Year</th>
	<th colspan="2">Action</th>
	</tr>

		<?php
		foreach($query as $row)
		{

		echo "<tr>";
		echo "<td>".  $row->id 		."</td>";
		echo "<td>".  $row->title 	."</td>";
		echo "<td>".  $row->author 	."</td>";
		echo "<td>".  $row->year 	."</td>";
		echo "<td>". anchor('books/input/'.$row->id, 'Edit') ."</td>";
		echo "<td>". anchor('books/del/'.$row->id, 'Delete') ."</td>";
		echo "</tr>";
		}
		?>
		</table>

				<div id="footer">
				<?php  $this->load->view('books_footer'); ?>
				</div>

</body>
</html>