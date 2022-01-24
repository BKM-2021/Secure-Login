<?php

include_once 'lib/setup-blade.php';
function db_connect() {
    $conn = mysqli_connect("localhost", "root", "", "test") 
    or die ('Sorry,cannot connect to MySQL');

    return $conn;

    $conn->close();

}
?>