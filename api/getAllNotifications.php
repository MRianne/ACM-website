<?php
    include "includes/dbcon.php";
    if(isset($_GET['idno'])){
        $idno = $_GET['idno'];
        $query_string = "SELECT * FROM notifications WHERE idno=$idno"; 
        $result = $conn->query($query_string. " ORDER BY n_id DESC");
        if($result){
            $items = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $response = array('has_error'=>false, 'items'=>$items, 'message'=>'Notifications Retrieved!');
        } else {
            $response = array('has_error'=>true, 'message'=>'Failed retrieving notifications!');
        }
        echo json_encode($response);
    } else {
        header('Location: 400.html');
        exit;
    }
?>