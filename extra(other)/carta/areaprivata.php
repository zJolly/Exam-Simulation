<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Area privata</title>
    <link rel="stylesheet" href="./css/stile.css" type="text/css">
  </head>
  <body>
    <h1>Area Privata</h1>
    <hr>
    <?php
    if(!isset($_COOKIE['logged'])){
      header("location: index.php");
      exit();
    }
    echo "<h4>Sei loggato come: ".$_COOKIE['logged']."</h4><br>";
    ?>
    <div class="chiedi">
      <div class="row">
        <div class="col">
          <a href="datiaccount.php">Dati account</a>
        </div>
      </div>
    </div>
    <div class="visualizza">
      <div class="row">
        <div class="col">
          <a href="listacarte.php">Lista Carte di Credito</a>
        </div>
      </div>
    </div>
    <div class="pulsanti">
      <a href="logout.php">Logout</a>
    </div>
  </body>
</html>
