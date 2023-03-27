<?php
session_name("alumno");
session_start(); 
header("Location: ".$_SERVER['HTTP_REFERER']."");
unset($_SESSION['carrito']);
?>