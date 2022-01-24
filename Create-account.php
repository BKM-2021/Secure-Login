<?php

include_once 'lib/setup-blade.php';
include_once 'Models/db.php';



if(!isset($_POST["email"])) {
    header("Location: /projects/Secure-Login/Sign-up.php");
    exit;
}

$email = strip_tags($_POST['email']);
$Password = strip_tags($_POST['Password']);


$insert = insert();