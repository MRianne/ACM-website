<?php
    include "includes/util.php";

    $id = $_GET['id'];

    $account = get_account($id);
    $member = get_member($id);
    $academia = get_academia($id);
    $account_type = strtoupper(get_account_type($account['type'])['account_desc']);

    include('header.php');
    include('template/profile.php');
    include('footer.php');