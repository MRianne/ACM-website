<?php 
    require "./includes/dbcon.php";
    $data = json_decode(file_get_contents('php://input'), true);
    if($data){
        $has_error = true;
        $msg = "";
        $item = null;
        $username = strip_tags($data['username']);
        $password = md5(strip_tags($data['password']));
        if(empty($username) || empty($password)) {
            $msg .= "Please complete input fields!";
        } else if (preg_match("/^[^A-Za-z0-9._]$/", $username)) {
            $msg .= "Invalid username or password!";
        } else {
            $sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) == 0) {
                $msg = "Account does not exists!";
            } else {
                $row = mysqli_fetch_array($result);

                if($row['status'] == 0)
                    $msg = "Account is inactive, contact admin for activation.";
                else {
                    $has_error = false;
                    $msg = "Login Successful!";
                    $item = $row;
                    $idno = $row['idno'];
                    $result = $conn->query("INSERT INTO sessions(idno) VALUES($idno)");
                    $session_id = $conn->insert_id;
                }
            }
        }
        $response = array('has_error'=>$has_error, 'item'=>$item, 'session_id' => $session_id, 'message'=>$msg);
        echo json_encode($response);
    } else {
        header('Location: errors/400.html');
        exit;
    }
?>			