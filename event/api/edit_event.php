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

} else {

    $post = $_POST;
    //Values
    $id = $post['id'];
    $title = $post['title'];
    $desc = $post['description'];
    $prop = $post['proponents'];
    $start_date = $post['start_date'];
    $end_date = $post['end_date'];
    $venue = $post['venue'];
    $links = $post['gdrive_link'];
    $reg_link = $post['reg_link'];

    $sql = "UPDATE events
        SET 
          event_title = '$title',
          event_desc = '$desc',
          proponents = '$prop',
          start_date = '$start_date',
          end_date = '$end_date',
          venue = '$venue',
          links = '$links',
          reg_link = '$reg_link' 
        WHERE event_id=$id ";

    $result = $conn->query($sql);

    if ($conn->affected_rows > 0) {
        echo json_encode(array(
            "event_id" => $id,
            "rows_affected" => $conn->affected_rows,
            "status" => "success",
            "message" => "Record updated"
        ));
    } else {
        echo json_encode(array(
            "status" => "error",
            "message" => "Can't update record",
            "sql" => $sql,
            "result" => $result,
            "error" => $conn->error
        ));
    }
}



