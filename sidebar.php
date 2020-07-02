<section>
  <?php
  if(!empty($_SESSION['gehaeuse'])) {
    echo ("Deine Konfiguration:"."<br/>");
    echo ("<br/>");
    echo ("Gehäuse: "."".$_SESSION['gehaeuse']."<br/>");
    echo ("Prozessor: "."".$_SESSION['cpu']."<br/>");
    echo ("Arbeitsspeicher: "."".$_SESSION['ram']."<br/>");
    echo ("SSD: "."".$_SESSION['ssd']."<br/>");
    echo ("HDD: "."".$_SESSION['hdd']."<br/>");
  }
  else
    echo ("Hier könnte Dein Wunsch-PC stehen.");
  ?>
</section>
