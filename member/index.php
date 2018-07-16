<?php
    include "includes/conn.php";
    
    $programs = ['BSCSBA', 'BSCSSE', 'BSITAGD', 'BSITDA', 'BSITSMBA', 'BSITWMA', 'BSCE', 'BSCPE', 'BSECE', 'BSEE', 'BSME'];

    foreach($programs as $program) {
        $members[$program] = mysqli_fetch_assoc(mysqli_query($conn, "select count(*) as count from members as t1, academia as t2 where t1.idno = t2.idno and t2.program = '$program'"))['count'];
    }

    include('header.php');
    include('template/dashboard.php');
    include('footer.php');