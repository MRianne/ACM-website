<?php

require '../includes/conn.php';

session_start();
if(!isset($_SESSION['user'])) {
    header("location: logout.php");
}

$event_id = $_POST['event_id'];
$status = $_POST['status'];

//execute
$sql = "UPDATE events 
    SET status='$status'
    WHERE event_id=$event_id";

$result = $conn->query($sql);

if($conn->affected_rows > 0){
    echo json_encode(array(
        "event_id" => $event_id,
        "event_status" => $status,
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
