<?php
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$sesso=$_POST['sesso'];
$sport=$_POST['sport'];
$citta=$_POST['citta'];
$hobby=$_POST['hobby'];

/*
echo $nome."<br>";
echo $cognome."<br>";
echo $sesso."<br>";
echo $sport."<br>";
echo $citta."<br>";
echo $hobby."<br>";
*/

$host="localhost";
$user="root";
$pass="";
$db="dbUtenti";

$connessione=mysqli_connect($host, $user, $pass, $db) or die(header("location: index.html"));
$query="INSERT INTO tblPersone VALUES('".$nome."', '".$cognome."', '".$sesso."', '".$sport."', '".$citta."', '".$hobby."');";
$risultato=mysqli_query($connessione, $query) or die("Dio porco");

header("location: index.html");
exit();
?>
