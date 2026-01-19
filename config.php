<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "login_system";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if(!$conn){
    die("connection failed:" .mysqli_connect_error());
}

session_start();

?>
