<?php
$host="localhost";
$dbname ="login_db";
$usernmae="root";
$password="";
$mysqli= new mysqli( hostname: $host, username :$usernmae,password: $password , database: $dbname );
if($mysqli->connect_errno) {
    die("connection error:". $mysqli->connect_error);
}
return $mysqli;
