<?php 
	
	include_once '../model/db.php';
	$conn = db_connect();
	
	$selected_rows = select("*","`users`",1,$conn);