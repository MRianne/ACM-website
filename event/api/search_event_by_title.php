<?php

require '../includes/conn.php';

if(isset($_GET['title']) && isset($_GET['tab'])){

    $key = $_GET['title'];
    $tab = $_GET['tab'];
    $sql = "SELECT * FROM events WHERE event_title LIKE '%$key%' AND status = '$tab'";
    $result = $conn->query($sql);

    $data = array();

    while($row = $result->fetch_assoc()){
        array_push($data, $row);
    }

    if(sizeof($data) > 0){
        print json_encode(
            array(
                "status" => 'success',
                "events" => $data,
                "id" => $key
            )
        );
    }
    return;
}

print json_encode(
    array(
        "status" => "error",
        "message" => "No Event for Key"
    )
);
