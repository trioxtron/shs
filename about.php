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
  <link href="discover.css" rel="stylesheet">
  <link rel="icon" href="images/favicon.png" type="image/png">
  <title>Über uns</title>
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
          <li><a href="discover.php">Kontakt</a></li>
        </ul>
      </nav>
    </header>
    <section class="discover-main-section">
      <div class="call-to-action">
        <h2>Unser Ziel:</h2>
        <p>
          Wir wollen es Schülern im digitalen Zeitalter</br>ermöglichen, sich gegenseitig in der Schule zu helfen.
        </p>
        <h2>Unser Konzept:</h2>
        <p>Wenn du kostengünstige oder kostenlose Nachhilfe sucht, melde dich an.</br>Wenn du selber Unterricht geben möchtest, musst du ein Schüler des GSG-Lebach sein.</br>Alle Nachhilfelehrer sind von unserer Schule als gute Schüler verifiziert!</br>So hast du Sicherheit bei der Auswahl eines Lehrers.</p>
      </div>
      <img class="covers-image" src="images/planet.png">
    </section>
  </div>

  <footer class="main-footer">
    <div class="container">
      <nav class="footer-nav">
        <ul>
        <?php
          if (isset($_SESSION['userId'])) {
            echo"<li><a href='courses.php'>Kurse</a></li>
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