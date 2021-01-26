<?php
    session_start();
?>
<?php
  if (isset($_SESSION['userId'])) {
    if ($_SESSION['verificated'] == 1) {
        echo('<!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <link href="createcours.css" rel="stylesheet">
          <link rel="icon" href="images/favicon.png" type="image/png">
          <title>Kurs erstellen</title>
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
                        <button class="btn_logout" type="submit" name="logout-submit">Abmelden</button>
                    </form>
                  <li><a href="start.php">Start</a></li>
                </ul>
              </nav>
            </header>
            <section class="join-main-section">
                <form class = "join-form" action="includes/createcours.inc.php" method="post">
                    <div class="input-group">
                        <label>Fach:</label>
                        <select type="text" name="subject" placeholder="Fach...">
                          <option value="Deutsch">Deutsch</option>
                          <option value="Englisch">Englisch</option>
                          <option value="Französisch">Französisch</option>
                          <option value="Mathe">Mathematik</option>
                          <option value="Physik">Physik</option>
                          <option value="Chemie">Chemie</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label>Für Klasse:</label>
                        <select type="text" name="forclass" placeholder="Klasse...">
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label>Preis pro Stunde:</label>
                        <select type="text" name="price" placeholder="Fach...">
                        <option value="0">Kostenlos</option>
                        <option value="5">5 €</option>
                        <option value="10">10 €</option>
                        </select>
                    </div>   
                    <button type="submit" class="btn" name="cours-submit">Erstellen</button>
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
        header("Location: verificate.php?error=notverificated"); 
    }
  }

  else {
      header("Location: join.php?error=login");
  }
?>

