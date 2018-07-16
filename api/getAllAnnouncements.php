<?php
    include "includes/dbcon.php";
    $query_string = "SELECT * FROM announcements"; 
    $result = $conn->query($query_string. " ORDER BY a_id DESC");
    if($result){
        $items = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $response = array('has_error'=>false, 'items'=>$items, 'message'=>'Announcements Retrieved!');
    } else {
        $response = array('has_error'=>true, 'message'=>'Failed retrieving announcements!');
    }
    echo json_encode($response);
?>