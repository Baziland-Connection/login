<?php
  require 'db-connect.php';

  $fehler = $_POST['Fehlercode'];
  echo $_POST['Fehlercode'];
  if ( $fehler == '1') {
    $vorgang = 'Erfolgreicher Login';
    $import = $_SESSION['DB']->query("SELECT KundenNr FROM kunden WHERE eMail='".$_SESSION['EMail']."'");
    while ($row = $import->fetch_assoc()) {
    $kundennummer = $row['KundenNr'];
  }
  } elseif ( $fehler == '2') {
      $vorgang = 'Falsches Passwort';
      $kundennummer = $row['KundenNr'];
    } elseif ( $fehler == '3') {
        $vorgang = 'Benutzer nicht registriert';
        $kundennummer = '0';
      } else {
        $vorgang = 'Fehler nicht dokumentiert';
        $kundennummer = '0';
    }

    echo $vorgang;


  date_default_timezone_set("Europe/Berlin");
  $timestamp = date('d.m.Y G:i:s');
  $ip = $_SERVER['REMOTE_ADDR'];

  $_SESSION['DB']->query("INSERT INTO user_log(KundenNr, Timestamp, IP, Vorgang) VALUES ('$kundennummer', '$timestamp','$ip', '$vorgang')");

?>
