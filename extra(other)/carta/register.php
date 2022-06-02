<?php
include("connect.php");

$email=$_POST['email'];
$password=$_POST['password'];
$cf=$_POST['cf'];
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$eta=$_POST['eta'];
$datan=$_POST['datan'];
$sex=$_POST['sex'];
$indirizzo=$_POST['indirizzo'];
$numcell=$_POST['numcell'];
$reddito=$_POST['reddito'];

$query="INSERT INTO tblutenti VALUES('".$cf."','".$nome."','".$cognome."','".$eta."','".$datan."','".$sex."','".$email."', '".$password."','".$indirizzo."','".$numcell."','".$reddito."');";
$risultato=mysqli_query($connessione, $query) or die(header("location: index.php"));
#echo $query; 
?>