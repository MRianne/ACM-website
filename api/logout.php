<?php
    include "includes/dbcon.php";
    if(isset($_GET['s_id'])){
        $s_id = $_GET['s_id'];
        $query_string = "UPDATE sessions SET is_active=0 WHERE s_id=$s_id"; 
        $conn->query($query_string);
        $response = array('has_error'=>false, 'message'=>'Logout Successful!');
        echo json_encode($response);
    } else {
        header('Location: 400.html');
        exit;
    }
?>