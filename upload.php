<?php

header("Location: /index.php");
include 'clases.php';

if($_POST['guest_name'] !== ''){
$book -> append($_POST['guest_name']);
}

if(isset($_FILES['file_to_upload'])){
$upload -> isUploaded();
$upload -> upload();
}

