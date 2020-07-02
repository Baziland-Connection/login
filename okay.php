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
           <h3 class="col-12">Dein Passwort wurde geändert.</h3>
           <div class="col-12 button mt-3">
             <a class="btn btn-primary" href="member.php" role="button">Zurück zum Mitgliederbereich</a>
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
