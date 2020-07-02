<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
  </head>
  <header>
    <?php require 'menue.php'; ?>
  </header>
  <body>
    <div class="container d-flex justify-content-center align-items-center">
      <form class="d-flex flex-column col-6" action="login.php" method="post">
        <p class="font-weight-bold">Bitte melden Sie sich an:</p>
        <label for="name">Name</label>
        <input type="text" name="name" value="">
        <label for="password">Passwort</label>
        <input type="password" name="password" value="">
        <div class="button ml-1 mt-3">
          <button type="submit" name="button">Einloggen</button>
        </div>
      </form>


    </div>
    <div class="container">
      <?php
        $db = new mysqli("localhost", "root", "", "shop");
        if ($db->connect_errno) {
          echo "Verbindung zur Datenbank fehlgeschlagen: (" . $db->connect_errno . ") " . $db->connect_error;
        }
        else echo "Datenbank ist verbunden."."<br>";

        $db->query("INSERT INTO kunden(Nachname, Vorname) VALUES ('Burger', 'Dominic')");
        echo ("<br>");

        $rueckgabe = $db->query("SELECT * FROM kunden");
        while ($row = $rueckgabe->fetch_assoc()) {
            echo " Kundennummer: " . $row['KundenNr'] . "<br>";
            echo " Name: " . $row['Nachname'] ." ".$row['Vorname']. "<br>";
        }
      ?>

    </div>

  </body>
</html>
