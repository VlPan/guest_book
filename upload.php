<?php
// header("Location: /index.php");
if($_POST['guest_name'] !== ''){
$guest_name = $_POST['guest_name'];
$current = file_get_contents(__DIR__ . '/guest_book.txt');
$current .= $guest_name . "\n";
file_put_contents(__DIR__ . '/guest_book.txt', $current); // covert array into a string
}


if(isset($_FILES['file_to_upload'])){
	if(0 == $_FILES['file_to_upload']['error']){
		$target_dir = __DIR__ . "/Files/";
		$target_file = $target_dir . basename($_FILES["file_to_upload"]["name"]);
		$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
    		$res = move_uploaded_file($_FILES['file_to_upload']['tmp_name'],$target_file);
			echo 'successful';
		}

	}
}