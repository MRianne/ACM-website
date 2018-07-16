<?php
    include "includes/util.php";

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = $_GET['id'];
        $academia = get_academia($id);
        $member = get_member($id);
        $account = get_account($id);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = strip_tags($_POST['id']);
        
        $fname = strip_tags($_POST['first_name']);
        $mname = strip_tags($_POST['middle_name']);
        $lname = strip_tags($_POST['last_name']);
        $program = strip_tags($_POST['program']);
        
        $username = strip_tags($_POST['username']);
        $type = strip_tags($_POST['account_type']);

        $p_id = strip_tags($_POST['p_id']);
        $paid = strip_tags($_POST['paid']);

        update_academia($id, $fname, $lname, $mname, $program);
        update_member($id, get_year(), $p_id, $paid);
        update_account($id, $username, $type);

        header('Location: list.php');
    }

    include('header.php');
    include('template/update.php');
    include('footer.php');