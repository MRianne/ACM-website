<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
    $host = "localhost";
	$uname = "1335054";
	$pass = "acm123";
	$db = "1335054";

	$conn = mysqli_connect($host, $uname, $pass);
	mysqli_select_db($conn, $db);
    
    if(isset($_GET['apiKey'])){
        $query_string = "SELECT * FROM api_key ORDER BY api_key DESC";
        $result = $conn->query($query_string);
        $row = mysqli_fetch_row($result);
        if($_GET['apiKey'] != $row[1]){
            header("Location: ./errors/invalidversion.php");
            exit;
        }
    } else {
        header("Location: ./errors/403.html");
        exit;
    }
?>		