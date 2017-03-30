<?php
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