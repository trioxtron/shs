<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="styles.css" rel="stylesheet">
  <link href="imprint.css" rel="stylesheet">
  <link rel="icon" href="images/favicon.png" type="image/png">
  <title>Impressum</title>
</head>
<body class="full-height-grow">
  <div class="container full-height-grow">
    <header class="main-header">
      <a href="/" class="brand-logo">
        <img src="images/logo3.png">
      </a>
      <nav class="main-nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="start.php">Start</a></li>
        </ul>
      </nav>
    </header>
    <section class="discover-main-section">
      <div class="call-to-action">
        <h1 class="title">Du brauchst Hilfe?<br>Kontaktiere uns:</h1>
        Unsere Emailadressen:<br>⠀
        • fed.belo@gmx.de<br>⠀
• schumacherb97@gmail.com<br>
⠀ • noah.don.kretzschmar@gmail.com<br><br><br>
Impressum der Schule:<br>
⠀• (Nach Veröffentlichung hier einfügen)
      </div>
      <img class="covers-image" src="images/Char2.png">
    </section>
  </div>

  <footer class="main-footer">
    <div class="container">
      <nav class="footer-nav">
        <ul>
        <?php
          if (isset($_SESSION['userId'])) {
            echo"<li><a href='start.php'>Kurse</a></li>";
          }
          else {
            echo"<li><a href='join.php'>Anmelden</a></li>";
          }
        ?>
        </ul>
      </nav>
      <nav class="footer-nav">
        <ul>
          <li>
            <a href="https://www.gsglebach.de/home.html" class="social-link">
              Schule
            </a>
          </li>
          <li>
            <a href="about.php" class="social-link">
              Über uns
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </footer>
</body>
</html>