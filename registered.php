<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="author" name="Heiko Becker">
    <meta name="description" content="Login-Übung von Heiko Becker">
    <meta name="keywords" content="Heiko Becker - bei Anruf Mord">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Bestätigung</title>
  </head>
  <body>
      <header>
        <?php require 'menue.php'; ?>
      </header>
      <main>
        <div class="container d-flex flex-column justify-content-center align-items-center">
          <?php
              // Username und Passwort in die csv schreiben
              $hash = password_hash($_POST['password'], PASSWORD_BCRYPT, ["salt" => "dasistdashausVOMNitrolausundweildashauszuKleinISTbauenwiresgroesser"]);
              $handle = fopen("users.csv","a");
              fwrite($handle,$_POST['name'].";".$hash.";"."\r\n");
              fclose($handle);
              echo "Vielen Dank, Herr/Frau " .$_POST['name'].".";
              echo "<br>";
              echo "<br>";
              echo "Deine Registrierung ist erfolgt.";
          ?>
          <br><br>
          <a class="btn btn-primary" href="index.php" role="button">Zurück zur Startseite</a>
        </div>




      </main>
    </body>
</html>
