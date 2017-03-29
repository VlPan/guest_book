<?php

class TextFile{
	public function __construct($guest_book_path){
		$this->guest_book_path = $guest_book_path;

	}
}

class GuestBook extends TextFile{

	public function getData(){

		return $arr_of_records = file($this -> guest_book_path);
	}

	public function append($text){

	$guest_name = $text;
	$current = file_get_contents($this -> guest_book_path);
	$current .= $guest_name . "\n";
	file_put_contents($this -> guest_book_path, $current);
	}
}

$book = new GuestBook(__DIR__ . "/guest_book.txt");


class Uploader{


	protected $target_dir = __DIR__ . "/Files/";
	protected $uploadOK = 0;


	public function isUploaded(){

		 $target_file = $this -> 	target_dir . basename($_FILES["file_to_upload"]["name"]);
	 	 $FileType = pathinfo($target_file,PATHINFO_EXTENSION);


			if(0 == $_FILES['file_to_upload']['error']){
				$this -> uploadOK++;
			}

		if($FileType == "jpg" || $FileType == "png" || $FileType == "jpeg"
		|| $FileType == "gif" ) {

			$this -> uploadOK++;

		}
		return $this -> uploadOK;
	}



	public function upload(){
		if($this -> uploadOK === 2){

		$target_file = $this -> target_dir . basename($_FILES["file_to_upload"]["name"]);
		$res = move_uploaded_file($_FILES['file_to_upload']['tmp_name'],$target_file);
		echo "File was successfully uploaded";
		}
	}
}


$upload = new Uploader();
