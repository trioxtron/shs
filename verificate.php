<?php
    session_start();
?>

<?php
  if (isset($_SESSION['userId'])) {
    if ($_SESSION['verificated'] == 0) {
      if ($_SESSION['sendVer'] == 0) {
        echo('<!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <link href="verificate.css" rel="stylesheet">
          <link rel="icon" href="images/favicon.png" type="image/png">
          <title>Verifikation</title>
        </head>
        <body class="full-height-grow">
          <div class="container full-height-grow">
            <header class="main-header">
              <a href="/" class="brand-logo">
                <img src="images/logo3.png">
              </a>
              <nav class="main-nav">
                <ul>
                    <form action="includes/logout.inc.php" method="post">
                        <button class="btn_logout" type="submit" name="logout-submit">Ausloggen</button>
                    </form>
                    <li><a href="discover.php">Kontakt</a></li>
                </ul>
              </nav>
            </header>
            <section class="join-main-section">
              <form action="sendVer.php" class="join-form">
                <div class="input-group">
                  <p>
                      Um sicher zu stellen, dass du Schüler des <br>
                      Geschwister Scholl Gymansiums in Lebach bist<br>
                      und, dass deine Noten gut sind,<br>
                      musst du von einem Lehrer verifiziert werden.<br>
                      Klicke auf "Verifikation beantragen" und dein Name,<br>
                      deine Klasse und deine E-Mail Adresse werden überprüft.<br>
                      Wir informieren dich, wenn du verifiziert wurdest.
                  </p>
                  <button type="submit" class="btn">Verifikation beantragen</button>
                </div>
              </form>
            </section>
          </div>
        
          <div class="join-page-circle-1"></div>
          <div class="join-page-circle-2"></div>
          <div class="join-page-circle-3"></div>
        
          <footer class="main-footer">
            <div class="container">
              <nav class="footer-nav">
                <ul>
                  <li><a href="courses.php">Kurse</a></li>
                  <li><a href="userchats.php">Meine Chats</a></li>
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
        </html>');
      }
      else {
        header('Location: sendVer.php');
      }
    }
    else {
      header('Location: createcours.php');
    }
  }
  else {
    header('Location: join.php');
  }