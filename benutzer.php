<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="author" name="Heiko Becker">
    <meta name="description" content="Login-Übung von Heiko Becker">
    <meta name="keywords" content="Heiko Becker - bei Anruf Mord">
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
          <div class="">
            <?php
            //var_dump($_SESSION['Passwort']);
                if(!empty($_SESSION['User']))
                  echo "<h2 class='col-12'>Hallo ".$_SESSION['User'].",";
                else header('location: loginseite.php');
               ?>
          </div>
          <div class="d-flex col-12 flex-column">
            <!-- <h3 class="col-12">deine Benutzerdaten:</h3> -->
            <form class="" action="pwchange.php" method="post">
              <div class="mt-3">
                <label for="passwort_alt">altes Passwort</label><br>
                <input type="password" class="col-6"  name="passwort_alt" value="">
              </div>
              <div class="mt-3">
                <label for="passwort_neu">neues Passwort</label><br>
                <input type="password" class="col-6"  name="passwort_neu" value="">
              </div>
              <div class="mt-3">
                <label for="passwort_bestaetigt">Passwort bestätigen</label><br>
                <input type="password" class="col-6"  name="passwort_bestaetigt" value="">
              </div>
              <div class="button mt-4">
                <button type="submit" name="button">Änderung bestätigen</button>
              </div>
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
