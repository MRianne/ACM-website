<?php

require '../includes/conn.php';

if(isset($_GET['event_id'])){

    $event_id = $_GET['event_id'];
    $sql = "SELECT * FROM events WHERE event_id=$event_id";
    $result = $conn->query($sql);

    $data = array();

    while($row = $result->fetch_assoc()){
        array_push($data, $row);
    }

    print json_encode(
        array(
            "status" => 'success',
            "event" => $data,
            "id" => $event_id
        )
    );
    return;
}

print json_encode(
    array(
        "status" => "error",
        "message" => "No Filter Value"
    )
);