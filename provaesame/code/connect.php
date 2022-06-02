<?php
$host="localhost";
$user="root";
$pass="";
$db="dbecommerce";

$connessione=mysqli_connect($host, $user, $pass, $db) or die(header("location: index.php"));
?>
