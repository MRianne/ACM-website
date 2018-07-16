<?php
require '../includes/conn.php';


$sql = "SELECT * FROM events 
        WHERE 
          start_date IS NOT NULL and 
          end_date IS NOT NULL 
        ORDER BY `start_date` ASC 
        ";

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