<?php

$errors =[];
$success =[];



var_dump($_POST["loginname"]);



if (!empty($_POST) && $_POST["loginname"] != '' ) { // Si $_POST n'est pas vide et est Différent de '' (vide) Alors.
    session_start();
    $_SESSION["login"] = $_POST["loginname"];
    header('Status: 301 Moved Permanently', false, 301);
    header('location: index.php');
    exit();
}else{
    header('location: login.php');
}

