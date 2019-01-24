<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title>php-basket</title>
  </head>
  <body>
    <?php foreach ($giocatori as $giocatore) { ?>
      <div class="card">
        <ul>
          <li>Codice giocatore: <?php echo $giocatore['giocatoreUnivoco'] ?></li>
          <li>Punti Fatti: <?php echo $giocatore['numeroPunti'] ?></li>
          <li>Rimbalzi Fatti: <?php echo $giocatore['numeroRimbalzi'] ?></li>
          <li>Falli: <?php echo $giocatore['falli'] ?></li>
          <li>Percentuale da 2 punti: <?php echo $giocatore['percentuale2punti'] ?></li>
          <li>Percentuale da 3 punti: <?php echo $giocatore['percentuale3punti'] ?></li>
        </ul>
      </div>
    <?php } ?>
  </body>
</html>
