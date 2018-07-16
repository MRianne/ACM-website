<?php
require '../includes/conn.php';

$sql = "SELECT * FROM events"; 

$result = $conn->query($sql);

$data = array();
while($row = $result->fetch_assoc()){
    array_push($data, $row);
}

//Show at logger
print json_encode(
    array(
        "events" => $data, 
    )
);