
	<?php

	require __DIR__."/clases/Views.php";
	require __DIR__ . "/clases/GuestBook.php";
	$view = new View(__DIR__. "/templates/index.php");
	$book = new GuestBook(__DIR__ . "/guest_book.txt");
	$arr_of_records = $view->assign('arr_of_records',$book -> getData());

	$view->display();
