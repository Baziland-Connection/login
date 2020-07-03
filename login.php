<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="author" name="Heiko Becker">
    <meta name="description" content="Login-Übung von Heiko Becker">
    <meta name="keywords" content="Heiko Becker - bei Anruf Mord">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bestätigung</title>
  </head>
  <body>
    <header>
      <?php require 'menue.php'; ?>
    </header>

    <main>
      <div class="container d-flex flex-column justify-content-center align-items-center">

            <?php
                session_start();
                // Name aus Login-Formular übernehmen
                $email = $_POST['email'];
                $passwort = $_POST['password'];
                $pw_false = false;
                // Passwort-HASH generieren
                $hash = password_hash($_POST['password'], PASSWORD_BCRYPT, ["salt" => "dasistdashausVOMNitrolausundweildashauszuKleinISTbauenwiresgroesser"]);
                // Datenbankverbindung herstellen
                  require 'db-connect.php';
                // Datenbankinhalt einlesen
                $import = $_SESSION['DB']->query("SELECT * FROM kunden");
                while ($row = $import->fetch_assoc()) {
                  if ( $row['eMail'] == $email) {
                    if ( $row['Passwort'] == $hash) {
                      echo "Du wirst eingeloggt."; // nicht notwendig, aber da :)
                      $_SESSION['User'] = $row['Vorname'];
                      $_SESSION['Loginname'] = $row['Nachname'];
                      $_SESSION['EMail'] = $row['eMail'];
                      $_POST['Fehlercode'] = '1';
                      $pw_false = true;
                      require 'user_log.php';
                      header('location: member.php');
                    }
                    else{
                      $pw_false = true;
                      $_SESSION['EMail'] = $email;
                      $_POST['Fehlercode'] = '2';
                      require 'user_log.php';
                      echo "Du hast das falsche Passwort eingegeben.";
                      break;
                    }
                  }
                }
                if($pw_false == false){
                  $_POST['Fehlercode'] = '3';
                  require 'user_log.php';
                  echo "Benutzer nicht vorhanden!";
                }
            ?>
            <br><br>
            <a class="btn btn-primary" href="loginseite.php" role="button">Erneut versuchen</a>
      </div>
    </main>

  </body>
  <?php
  require 'db-status.php';
  ?>
</html>
