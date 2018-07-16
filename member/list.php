<?php
    include "includes/util.php";

    $members = get_all();

    include('header.php');
    include('template/list.php');
    include('footer.php');