<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="author" name="Heiko Becker">
    <meta name="description" content="Login-Übung von Heiko Becker">
    <meta name="keywords" content="Heiko Becker - bei Anruf Mord">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
  </head>
  <header>
    <?php require 'menue.php'; ?>
  </header>
  <body>
    <div class="container d-flex justify-content-center align-items-center">
      <form class="d-flex flex-column col-6" action="login.php" method="post">
        <p class="font-weight-bold">Bitte melden Sie sich an:</p>
        <!-- csv-Version
        <label for="name">Name</label>
        <input type="name" name="name" value=""> -->
        <label for="email">eMail</label>
        <input type="mail" name="email" value="">
        <label for="password">Passwort</label>
        <input type="password" name="password" value="">
        <div class="button ml-1 mt-3">
          <button type="submit" name="button">Einloggen</button>
        </div>
      </form>
    </div>
  </body>
  <?php require 'db-status.php'; ?>
</html>
