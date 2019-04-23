<?php require 'inc/head.php';

$t=0;
var_dump($_GET['add_to_cart']);

if ($_GET['add_to_cart'] == 1){
    echo 'ok';
    $t = $t + 1;
    unset($_GET);

}


echo $t;