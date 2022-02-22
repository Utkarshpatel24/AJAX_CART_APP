<?php
session_start();
$_SESSION['cartArray']=array();
echo json_encode($_SESSION['cartArray']);
// include "config.php";
// include "displayCart.php";
// display();
// header("Location:products.php");
?>