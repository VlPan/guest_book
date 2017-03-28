

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GuestBook</title>
</head>
<body>

<?php
include 'functions.php';
?>

<h2>Here is Guest's List:</h2>

<ul>
	<?php
	$arr_of_records = Allrecords(); //Function from 'functions.php'
	foreach ($arr_of_records as $key => $value) {
		?>

	<li><?php echo $value; ?></li>
	<?php
	}
	 ?>
</ul>

<form calss="myForm" enctype="multipart/form-data" method="POST" action="upload.php">
	<input type="text" name="guest_name">
	<input type="file" name="file_to_upload">
	<input type="submit" name="submit" value="submit">
</form>


</body>
</html>