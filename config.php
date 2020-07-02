<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="author" name="Heiko Becker">
    <meta name="description" content="Login-Übung von Heiko Becker">
    <meta name="keywords" content="Heiko Becker - bei Anruf Mord">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Konfigurieren</title>
  </head>
  <body>
    <header>
      <?php
        require 'menue.php';
        session_start();
      ?>
    </header>
    <main>
        <?php
            if(!empty($_SESSION['User']))
              $welcome=1;
            else header('location: loginseite.php');
        ?>

         <div class="container mt-3">
           <h3 class="">Bitte konfiguriere Deinen Rechner:</h3>
             <form class="form-group d-flex flex-wrap mt-4 col-12" action="bestellung.php" method="post">
               <div class="col-3">
                 <h5>Gehäuse</h3>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_tower" value="Tower" id="tower1">
                 <label class="form-check-label" for="tower1">Tower</label>
                 </div>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_tower" value="19 Zoll" id="tower2">
                 <label class="form-check-label" for="tower1">19 Zoll</label>
                 </div>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_tower" value="mini" id="tower3">
                 <label class="form-check-label" for="tower1">mini</label>
                 </div>
               </div>
               <div class="col-3">
                 <h5>Prozessor</h3>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_cpu" value="Intel i5" id="cpu1">
                 <label class="form-check-label" for="cpu1">Intel i5</label>
                 </div>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_cpu" value="Intel i7" id="cpu2">
                 <label class="form-check-label" for="cpu2">Intel i7</label>
                 </div>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_cpu" value="AMD" id="cpu3">
                 <label class="form-check-label" for="cpu3">AMD</label>
                 </div>
               </div>
               <div class="col-3">
                 <h5>RAM</h3>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_ram" value="2 GB" id="cpu1">
                 <label class="form-check-label" for="cpu1">2 GB</label>
                 </div>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_ram" value="4 GB" id="cpu2">
                 <label class="form-check-label" for="cpu2">4 GB</label>
                 </div>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_ram" value="8 GB" id="cpu3">
                 <label class="form-check-label" for="cpu3">8 GB</label>
                 </div>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_ram" value="16 GB" id="cpu4">
                 <label class="form-check-label" for="cpu4">16 GB</label>
                 </div>
               </div>
               <div class="col-3">
                 <h5>Festplatte</h3>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_ssd" value="128 GB SSD" id="hdd1">
                 <label class="form-check-label" for="hdd1">128 GB SSD</label>
                 </div>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_ssd" value="256 GB SSD" id="hdd2">
                 <label class="form-check-label" for="hdd2">256 GB SSD</label>
                 </div>
                 <br>
                 <h6>2. Festplatte (optional):</h6>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_hdd" value="1 TB HDD" id="hdd3">
                 <label class="form-check-label" for="hdd3">1 TB HDD</label>
                 </div>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_hdd" value="16 TB HDD" id="hdd4">
                 <label class="form-check-label" for="hdd4">16 TB HDD</label>
                 </div>
                 <div class="form-check">
                 <input class="form-check-input" required type="radio" name="gruppe_hdd" value="keine 2. Festpladde" id="hdd5">
                 <label class="form-check-label" for="hdd4">keine HDD</label>
                 </div>
              </div>
              <div class="">
                <button type="submit" class="btn btn-primary">Bestellung prüfen</button>
              </div>
              </form>
            </div>
    </main>
  </body>
</html>
