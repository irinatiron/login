<?php 
session_start();
if ($_SESSION["logged-in"] != true) { 
header("location: login.php");
exit(); } 
?> 
