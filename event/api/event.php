<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("location: logout.php");
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die('Method not allowed');
}

$errors = array();

if (empty($_POST["title"])) {
    array_push($errors, "Title cannot be empty");
}

if (empty($_POST["description"])) {
    array_push($errors, "Description cannot be empty");
}

if (empty($_POST["date"])) {
    array_push($errors, "Date cannot be empty");
}

if (empty($_POST["venue"])) {
    array_push($errors, "Venue cannot be empty");
}

if ($errors) {
    echo json_encode(array(
        "status" => "error",
        "message" => $errors[0]
    ));
} else {
    
}





?>