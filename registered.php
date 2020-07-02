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
          <!-- csv-Version -->
          <?php
              // Passwort hashen
              $hash = password_hash($_POST['password'], PASSWORD_BCRYPT, ["salt" => "dasistdashausVOMNitrolausundweildashauszuKleinISTbauenwiresgroesser"]);
/*
              // Daten in die csv schreiben
              $handle = fopen("users.csv","a");
              fwrite($handle,$_POST['name'].";".$hash.";".$_POST['vorname'].";".$_POST['email'].";"."\r\n");
              fclose($handle);
              echo "Vielen Dank, " .$_POST['vorname'].".";
              echo "<br>";
              echo "<br>";
              echo "Deine Registrierung ist in der csv-Datei erfolgt.";
              echo "<br>";
          */
          ?>
          <!-- Datenbank-Version -->
          <?php
          // Datenbankverbindung herstellen
            require 'db-connect.php';
          // Datensatz einfügen
            $name = $_POST['name'];
            $vorname = $_POST['vorname'];
            $email = $_POST['email'];
            $_SESSION['DB']->query("INSERT INTO kunden(Nachname, Vorname, eMail, Passwort) VALUES ('$name', '$vorname', '$email', '$hash')");
            echo ("<br>");
            echo "Vielen Dank, " .$_POST['vorname'].".";
            echo "<br>";
            echo "<br>";
            echo "Deine Registrierung in der Datenbank ist erfolgt.";
            echo "<br>";
          ?>
          <br><br>
          <a class="btn btn-primary" href="index.php" role="button">Zurück zur Startseite</a>
        </div>




      </main>
    </body>
</html>
