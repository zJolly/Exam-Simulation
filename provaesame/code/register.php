<?php
include("connect.php");

$email=$_POST['email'];
$password=$_POST['password'];
$cf=$_POST['cf'];
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$indirizzo=$_POST['indirizzo'];
$numcell=$_POST['numcell'];
$mansione=$_POST['mansione'];

$query="INSERT INTO tblOperatori VALUES('".$cf."','".$nome."','".$cognome."','".$email."', '".$password."','".$indirizzo."','".$numcell."','".$mansione."');";
$risultato=mysqli_query($connessione, $query) or die(header("location: index.php"));
#echo $query; 
?>