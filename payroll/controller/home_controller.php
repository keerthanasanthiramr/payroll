<?php 
	
	include_once '../model/db.php';
	$conn = db_connect();
	print_r($_REQUEST);
	// for ($i=0; $i < 10; $i++) { 
		insert("`users`", $_REQUEST, $conn);
		
	
		


 ?>