<?php

include_once 'lib/setup-blade.php';
include 'Models/db.php';


session_start();

if (isset($_POST['email'])) {
    $Entryemail = strip_tags($_POST['email']);
    $EntryPassword = strip_tags($_POST['Password']);
    if (($_SESSION["email"] == $Entryemail) && ($_SESSION["Password"] == $EntryPassword)){
        $msg = "You are now logged in.";
        setcookie("email", $_SESSION["email"], time() + (3600), "/");
    }
    else {
        $msg = "Something went wrong, please try again.";
    }
}
echo $blade->run("Log-in", array("message" => $msg));