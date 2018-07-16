<?php

	$host = "localhost";
	$uname = "1335054";
	$pass = "acm123";
	$db = "1335054";

	$conn = mysqli_connect($host, $uname, $pass);
	mysqli_select_db($conn, $db);