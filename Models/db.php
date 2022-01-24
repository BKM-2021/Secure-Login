<?php

include_once 'lib/setup-blade.php';
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$connection = mysqli_connect($hostname, $username, $password, $dbname) or die ('Sorry,cannot connect to MySQL');

function insert() {
    $Append = <<<SQL
        INSERT INTO users (
            email,
            Password
        )
        VALUES (
            {$this->email},
            {$this->password_hash}
        )
    SQL;

    $SQLQuery = $this->conneection->query($Append);

    if(!$SQLQuery){
        die("MYSQL query failed - please try again." . mysqli_error($this->connection));
    }
}
?>