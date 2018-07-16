<?php
    include "includes/util.php";

    $id = strip_tags($_GET['id']);

    delete_member($id);
    delete_account($id);

    header('Location: list.php');