<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

	session_start();
	if(!isset($_SESSION['user']))
		header("location: login.php");
//	$page = 'welcome.php';
?>

<html>
<head>
    <?php include('acm.php') ?>
    
    <script src="js/jquery.min.js"></script>
    
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>

    <title>ACM</title>
</head>
<body>
    <div class="center acm-body" style="float: left; width:20%; height:100%;">
        <img src="assets/acm_icon.png" width="60%" style="margin-top: 2em; margin-bottom: 2em;">	
        <div class="collection">
            <a href="member/index.php" target="acm-menu" class="collection-item"><span class="acm-color">Membership</span></a>
            <a href="finance/pages/Overall_Report.php" target="acm-menu" class="collection-item"><span class="acm-color">Finance</span></a>
            <a href="event/events.php" target="acm-menu" class="collection-item"><span class="acm-color">Events</span></a>
            <a href="AccountsPage/Admin_Member_Management.php" target="acm-menu" class="collection-item"><span class="acm-color">Accounts</span></a>
        </div>
        <form method="post" action="login.php">
            <button class="btn waves-effect"  style = "background-color: #555;" type="submit" name="logout">Log out
                    <i class="material-icons left">power_settings_new</i>
            </button>
        </form>
    </div>
    <iframe name="acm-menu" src="<?= $page ?>" frameborder="0" width="80%" height="100%"></iframe>
</body>
</html>