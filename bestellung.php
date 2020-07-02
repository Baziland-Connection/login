<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Prüfung</title>
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
        ?>

        <div class="container mt-5">
          <?php
            echo "<h2>Hallo ".$_SESSION['User'].",";
          ?>
          <h3 class="mb-5">bitte überprüfe Deine Bestellung:</h3>
          <?php
          $_SESSION['gehaeuse'] = $_POST['gruppe_tower'];
          $_SESSION['cpu'] = $_POST['gruppe_cpu'];
          $_SESSION['ram'] = $_POST['gruppe_ram'];
          $_SESSION['ssd'] = $_POST['gruppe_ssd'];
          $_SESSION['hdd'] = $_POST['gruppe_hdd'];
            echo ("Gehäuse: ".$_POST['gruppe_tower']. "<br/>");
            echo ("Prozessor: ".$_POST['gruppe_cpu']. "<br/>");
            echo ("Arbeitsspeicher: ".$_POST['gruppe_ram']. "<br/>");
            echo ("SSD-Festplatte: ".$_POST['gruppe_ssd']. "<br/>");
            if(empty($_POST['gruppe_hdd']))
            $_POST['gruppe_hdd'] = "keine 2. Festpladde";
            else;
            echo ("HDD-Festplatte: ".$_POST['gruppe_hdd']. "<br/>");
           ?>
           <form class="" action="buy.php" method="post">
             <div class="form-check">
               <br>
             <input class="form-check-input" required type="radio" name="bestellen" value="Bestellung überprüft" id="hdd5">
             <label class="form-check-label" for="bestellen">Die Bestellung ist korrekt</label>
             </div>
             <div class="">
               <br>
               <button type="submit" class="btn btn-primary">Bestellung verbindlich absenden</button>
             </div>
             <?php $eins = $eins = $_POST['gruppe_tower']; ?>

           </form>

        </div>
    </main>
  </body>
</html>
