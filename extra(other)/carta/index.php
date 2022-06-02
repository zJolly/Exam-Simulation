<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="./css/stile.css" type="text/css">
  </head>
  <body>
    <h1>E-COMMERCE</h1>
    <hr>
    <div class="login">
      <div class="row">
        <div class="col">
          <h4>Login</h4>
          <form action="login.php" method="post">
            Email
            <br>
            <input type="email" name="email" required>
            <br>
            Password
            <br>
            <input type="password" name="password" required>
            <br>
            <input type="submit" value="Login">
          </form>
        </div>
      </div>
    </div>
    <div class="register">
      <div class="row">
        <div class="col">
          <h4>Registrati</h4>
          <form action="register.html" method="post">
            <input type="submit" value="Registrati">
          </form>
        </div>
      </div>
    </div>
    <?php
    if(isset($_COOKIE['logged'])){
      header("location: areaprivata.php");
      exit();
    }
    ?>
  </body>
</html>
