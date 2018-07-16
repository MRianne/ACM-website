<?php
    include "includes/dbcon.php";
    if(isset($_GET['from_idno'])){
        $from_idno = $_GET['from_idno'];
        $query_string = "SELECT * FROM private_chat WHERE from_idno=$from_idno"; 
        $result = $conn->query($query_string. " ORDER BY c_id ASC");
        if($result){
            $items = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $response = array('has_error'=>false, 'items'=>$items, 'message'=>'Private Chats Retrieved!');
        } else {
            $response = array('has_error'=>true, 'message'=>'Failed retrieving private chats!');
        }
        echo json_encode($response);
    } else {
        header('Location: 400.html');
        exit;
    }
?>