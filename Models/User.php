<?php

include_once 'Models/db.php';
class User_Create{

    public $email = 'email';
    public $password = 'password';
    public $password_hash = 'passwordHash';

    function __contruct($connection, $email, $password){
        $this->email = mysqli_real_escape_string($connection, $email);
        $this->password = mysqli_real_escape_string($connection, $password);

        $this->password_hash = password_hash($connection, PASSWORD_BCRYPT);

        $this->connection = $connection;
    }

    function insert() {
        $Append = <<<SQL
            INSERT INTO users (
                email,
                password
            )
            VALUES (
                {$this->email},
                {$this->password_hash}
            )
        SQL;

        $SQLQuery = $this->connection->query($Append);

        if(!$SQLQuery){
            die("MYSQL query failed - please try again." . mysqli_error($this->connection));
        }
    }
}