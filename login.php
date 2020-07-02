<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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
                $name = $_POST['name'];
                $passwort = $_POST['password'];
                $pw_false = false;
                // Passwort-HASH generieren
                $hash = password_hash($_POST['password'], PASSWORD_BCRYPT, ["salt" => "dasistdashausVOMNitrolausundweildashauszuKleinISTbauenwiresgroesser"]);
                // User-Datei öffnen
                $handle = file('users.csv');

                // User-Daten in das array import zerlegt einfügen
                foreach ($handle as $import1) {

                  $import = str_getcsv ($import1, ';');

                  // Array mit den Einzelwerten auslesen und ausgeben
                  if($name == $import[0]){
                    if ( $hash ==  $import[1]) {
                      echo "Du wirst eingeloggt.";
                      $_SESSION['User'] = $name;
                      $_SESSION['Passwort'] = $passwort;
                      header('location: member.php');
                    }
                    else{
                      $pw_false = true;
                      echo "Du hast das falsche Passwort eingegeben.";
                      break;
                    }
                  }
                }
                if($pw_false == false){
                  echo "Benutzer nicht vorhanden!";
                }
            ?>
            <br><br>
            <a class="btn btn-primary" href="loginseite.php" role="button">Erneut versuchen</a>
      </div>
    </main>

  </body>
</html>
