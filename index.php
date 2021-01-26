
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
  <link href="index.css" rel="stylesheet">
  <link rel="icon" href="images/favicon.png" type="image/png">
  <title>Startseite</title>
</head>
<body class="full-height-grow">
  <div class = "container full-height-grow">
    <header class="main-header">
      <a href="/" class="brand-logo">
        <img src="images/logo3.png">
      </a>
      <nav class="main-nav">
        <ul>
        <li><a href="discover.php">Kontakt</a></li>
          <li><a href="about.php">Über uns</a></li>
        </ul>
      </nav>
    </header>
    <section class="home-main-section">
      <div class="img-wrapper">
        <div class="lady-image"></div>
      </div>
      <div class="call-to-action">
        <h1 class="title">Schüler helfen Schülern</h1>
        <span class="subtitle">Melde dich an um zu helfen<br>oder um Nachhilfe zu bekommen.</span>
        <a href="start.php" class="btn">Mach mit</a>
      </div>
    </section>
    <div class="home-page-circle-1"></div>
    <div class="home-page-circle-2"></div>
    <div class="home-page-circle-3"></div>
  </div>
  <footer class="main-footer">
      <div class="container">
        <nav class="footer-nav">
          <ul>
          <?php
            if (isset($_SESSION['userId'])) {
              echo"<li><a href='start.php'>Kurse</a></li>
                   <li><a href='userchats.php'>Meine Chats</a></li>";
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
              <a href="imprint.php" class="social-link">
                Impressum
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </footer>
</body>
</html>