<?php
    session_start();
    // if(!isset($_SESSION['user']))
    //     header('Location: login.php');

    include('header.php');
    include('template/profile.php');
    include('footer.php');