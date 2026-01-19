<?php
include "config.php";
include "header.php";

$error = "";
$success = "";

if(isset($_POST['register'])){
    if(empty($_POST['username']||$_POST['email']||$_POST['password'])){
        $error = "All fields are required";
    }
}
?>