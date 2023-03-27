<?php
session_name("admin"); 
session_start(); 
header("Location: ".$_SERVER['HTTP_REFERER']."");
unset($_SESSION['carrito']);
?>