<div class="container">
  <?php
  // Verbindung zur DB aufbauen
    $db = new mysqli("localhost", "root", "", "shop");
    if ($db->connect_errno) {
      echo "Verbindung zur Datenbank fehlgeschlagen: (" . $db->connect_errno . ") " . $db->connect_error;
    }
    else echo "Datenbank ist verbunden."."<br>";

  // Datensatz einfügen
    $db->query("INSERT INTO kunden(Nachname, Vorname) VALUES ('Burger', 'Dominic')");
    echo ("<br>");

  // Datensätze ausgeben
    $rueckgabe = $db->query("SELECT * FROM kunden");
    while ($row = $rueckgabe->fetch_assoc()) {
        echo " Kundennummer: " . $row['KundenNr'] . "<br>";
        echo " Name: " . $row['Nachname'] ." ".$row['Vorname']. "<br>";
    }
  ?>
</div>
