<?php

header("Location: /index.php");
include __DIR__. "/clases/GuestBook.php";
include __DIR__. "/clases/uploader.php";

$book = new GuestBook(__DIR__ . "/guest_book.txt");
if($_POST['guest_name'] !== ''){
$book -> append($_POST['guest_name']);
}


$upload = new Uploader();
if(isset($_FILES['file_to_upload'])){
$upload -> isUploaded();
$upload -> upload();
}

