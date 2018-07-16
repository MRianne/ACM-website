<?php

require '../includes/conn.php';

session_start();
if(!isset($_SESSION['user'])) {
    header("location: logout.php");
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die('Method not allowed');
}

//Error handling
$errors = array();
if (empty($_POST["title"])) {
    array_push($errors, "Title cannot be empty");
}
if (empty($_POST["description"])) {
    array_push($errors, "Description cannot be empty");
}
// if (empty($_POST["date"])) {
//     array_push($errors, "Date cannot be empty");
// }
if (empty($_POST["venue"])) {
    array_push($errors, "Venue cannot be empty");
}

//If there are errors, show it to log
if ($errors) {
    echo json_encode(array(
        "status" => "error",
        "message" => $errors[0]
    ));
} else { //if none, continue to try insert to database
    $post = $_POST;

    $sql = "INSERT INTO events (
          event_title, 
          event_desc, 
          proponents, 
          start_date, 
          end_date, 
          venue, 
          links,
          reg_link, 
          status, 
          idno
        ) 
        
        VALUES (
            '".$post['title']."',
            '".$post['description']."',
            '".$post['proponents']."',
            '".$post['start_date']."',
            '".$post['end_date']."',
            '".$post['venue']."',
            '".$post['gdrive_link']."',
            '".$post['reg_link']."',
            'proposal',
            '".$_SESSION['user']['idno']."'
        )
    ";

    $result = $conn->query($sql);

    //Retrieve the records
    $sql = "SELECT * FROM events"; 
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();

    echo json_encode($data);
}


