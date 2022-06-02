<?php
include("connect.php");

$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT email, password FROM tblOperatori";
$ris=mysqli_query($connessione, $query) or die("Errore QUERY");

while($riga=mysqli_fetch_array($ris)){
  if($riga['email']==$email){
    if($riga['password']==$password){
      $_SESSION['email']=trim($email);
      setcookie("logged", "$email", time()+60*60);
      header("location: indexver.php");
      exit();
    }
  }
}

header("location: index.php");
exit();
?>
