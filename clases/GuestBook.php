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
	$current = $current . $guest_name . "\n";
	file_put_contents($this -> guest_book_path, $current);
	}
}