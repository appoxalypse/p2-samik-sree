<?php
	
	$host = "127.0.0.1";
	$user = "your_username";
	$pass = "";
	$db = "c9";
	$port = 3306;
	
	$connection = mysqli_connect($host, $user, $pass, $db, $port)or dle(mysqli_error());
	
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	
	while ($row = mysqli_fetch_assoc($result)) {
		echo "The ID is: ".$row['id']." and the Username is: ".$row['username'];
	}
	