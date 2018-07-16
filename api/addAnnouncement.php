<?php
    include "includes/dbcon.php";
    $data = json_decode(file_get_contents('php://input'), true);
    if($data){
        $fields = "(";
        $values = "(";
        foreach($data as $key => $value) {
            if($value != null) {
                $fields .= $key . ",";
                $values .= "'" . $value . "',";
            }
        }
        $fields[strlen($fields)-1] = ")";
        $values[strlen($values)-1] = ")";
        $result = $conn->query("INSERT INTO announcements ".$fields." VALUES ".$values);
        $response = array('has_error'=>false, 'message'=>'Announcement Created!');
        echo json_encode($response);
    } else {
        header('Location: 400.html');
        exit;
    }
?>