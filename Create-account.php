<?php

include_once 'lib/setup-blade.php';
include_once 'Models/User.php';



if(!isset($_POST["email"])) {
    header("Location: /projects/Secure-Login/");
    exit;
}

$User_Create = new User_Create($_POST['email'], $_POST['Password']);
$User_Create->insert();