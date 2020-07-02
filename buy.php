<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="author" name="Heiko Becker">
    <meta name="description" content="Login-Übung von Heiko Becker">
    <meta name="keywords" content="Heiko Becker - bei Anruf Mord">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Kaufbestätigung</title>
  </head>
  <body>
    <header>
      <?php
        require 'menue.php';
        session_start();
        date_default_timezone_set("Europe/Berlin");
        $datum = date('d.m.Y G:i:s');
      ?>
    </header>
    <main>
        <?php
            if(!empty($_SESSION['User']))
              $welcome=1;
            else header('location: loginseite.php');

            $handle = fopen("bestellung.csv","a");
            fwrite($handle,$_SESSION['User'].";".$datum.";".$_SESSION['gehaeuse'].";".$_SESSION['cpu'].";".$_SESSION['ram'].";".$_SESSION['ssd'].";".$_SESSION['hdd'].";".$_POST['bestellen'].";"."\r\n");
            fclose($handle);
        ?>
        <div class="container mt-5">
          <h3>Vielen Dank! Deine Bestellung wurde übermittelt.</h3>
          <div class="mt-4">
            <a class="btn btn-primary" href="member.php" role="button">Zurück zum Member-Bereich</a>
          </div>
        </div>
    </main>
