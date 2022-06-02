<!DOCTYPE html>

<html lang="it"">
<link rel="stylesheet" href="./css/stile.css" type="text/css">
<head>
    <meta charset="utf-8" />
    <title>Dati account</title>
</head>
<body>
 <?php 
 if(!isset($_COOKIE['logged'])){
      header("location: index.php");
      exit();
      }
      include("connect.php");
      $query="SELECT * FROM tblutenti WHERE email='".$_COOKIE['logged']."';";
      $risultato=mysqli_query($connessione,$query)or die(header("location:areaprivata.php"));
      $riga=mysqli_fetch_array($risultato);
      echo "Codice Fiscale: ".$riga['cf']."<br>";
      echo "Nome: ".$riga['nome']."<br>";
      echo "Cognome: ".$riga['cognome']."<br>";
      echo "Eta: ".$riga['eta']."<br>";
      echo "Data di nascita: ".$riga['datan']."<br>";
      echo "Sesso: ".$riga['sex']."<br>";
      echo "E-Mail: ".$riga['email']."<br>";
      echo "PassWord: ".$riga['password']."<br>";
      echo "Indirizzo di residenza: ".$riga['indirizzo']."<br>";
      echo "Numero di cellulare: ".$riga['numcell']."<br>";
      echo "Reddito annuo: ".$riga['reddito']."<br>";


    ?>

</body>
</html>