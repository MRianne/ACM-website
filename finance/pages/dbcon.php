<?php
$mysql_hostname = "localhost";
$mysql_user = "1335054";
$mysql_password = "acm123";//CHANGE THIS
$mysql_database = "1335054";//CHANGE THIS
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database) or die("Could not connect database");

error_reporting(E_ALL);
            ini_set('display_errors', 1);
$conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>
