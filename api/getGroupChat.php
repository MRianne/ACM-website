<?php
    include "includes/dbcon.php";
    $query_string = "SELECT * FROM group_chat WHERE"; 
    $result = $conn->query($query_string. " ORDER BY gc_id ASC");
    if($result){
        $items = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $response = array('has_error'=>false, 'items'=>$items, 'message'=>'Group chat Retrieved!');
    } else {
        $response = array('has_error'=>true, 'message'=>'Failed retrieving group chat!');
    }
    echo json_encode($response);
?>