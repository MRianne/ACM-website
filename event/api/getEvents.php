<?php

require '../includes/conn.php';

if(isset($_GET['filter'])){
    $filter = $_GET['filter'];
    $sql = "SELECT * FROM events WHERE status='$filter'"; 
    $result = $conn->query($sql);
    $data = array();
    while($row = $result->fetch_assoc()){
        array_push($data, $row);
    }
    print json_encode(
        array(
            "status" => 'success',
            "events" => $data,
            "filter" => $filter
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