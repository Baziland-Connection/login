
<?php
// Verbindung zur DB aufbauen
  $db = new mysqli("localhost", "root", "", "shop");
  if ($db->connect_errno) {
    echo "Verbindung zur Datenbank fehlgeschlagen: (" . $db->connect_errno . ") " . $db->connect_error;
  }
  else {
    //echo "Verbindung zur Datenbank hergestellt.";
    $_SESSION['DB'] = $db;
  }
?>
