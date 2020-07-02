<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Mitgliederbereich</title>
  </head>
  <body>
    <header>
      <?php
        require 'menue.php';
        session_start();
      ?>
    </header>
    <main>
      <div class="container d-flex justify-content-center align-items-center">
        <div class="row col-9">
        <?php
            if(!empty($_SESSION['User']))
              echo "<h2 class='col-12'>Hallo ".$_SESSION['User'].",";
            else header('location: loginseite.php');
           ?>
           <h3 class="col-12">das ist der nur für Mitglieder sichtbare Bereich.</h3>
           <div class="col-12 button mt-3">
             <form class="" action="config.php" method="post">
               <button type="submit" name="button">Rechner konfigurieren</button>
             </form>
           </div>
        </div>
        <div class="sidebar col-3">
          <?php
            require 'sidebar.php';
          ?>
        </div>
      </div>
    </main>
  </body>
</html>
