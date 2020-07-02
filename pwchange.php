

<?php
session_start();

//$hash_alt = password_hash($_POST['password_alt'], PASSWORD_BCRYPT, ["salt" => "dasistdashausVOMNitrolausundweildashauszuKleinISTbauenwiresgroesser"]);

if ($_POST['passwort_alt'] == $_SESSION['Passwort']) {
  echo ("Das Passwort stimmt mit dem aktuellen überein."."<br/>"."<br/>");
}
else {
  echo ("Das Passwort stimmt nicht mit dem aktuellen überein."."<br/>"."<br/>");
  header('location: benutzer.php');
}

if ($_POST['passwort_neu'] == $_POST['passwort_bestaetigt']) {
    echo ("Passwörter stimmen überein");
}
  else {
  echo ("Die neuen Passwörter sind unterschiedlich."."<br/>"."<br/>");
  header('location: benutzer.php');
}

// Passwort in der users.csv ändern
$handle = file('users.csv');
$file = fopen('users.csv', 'w');
$users = array();

foreach ($handle as $import1) {
  $tmp_user = explode(";", $import1);
  if($tmp_user[0] != $_SESSION['User'])
    array_push($users, $import1);
}

array_push($users, $_SESSION['User'].";".password_hash($_POST['passwort_neu'], PASSWORD_BCRYPT, ["salt" => "dasistdashausVOMNitrolausundweildashauszuKleinISTbauenwiresgroesser"]).";\r\n");

foreach($users as $us){
  fwrite($file, $us);
}

fclose($file);

header('location: okay.php');

?>
