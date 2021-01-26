<!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <link href="contact.css" rel="stylesheet">
          <link rel="icon" href="images/favicon.png" type="image/png">
          <title>Email schreiben</title>
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
                    <li><a href="about.php">Über Uns</a></li>
                </ul>
              </nav>
            </header>
            <?php
                echo ('<section class="join-main-section">
                    <form class = "join-form" action="includes/contact.inc.php?id=' . $_GET["id"] . '" method="post">
                        <div class="input-group">
                            <label>Betreff:</label>
                            <input type="text" name="object" placeholder="z.B Kurs">
                        </div>
                        <div class="input-group">
                            <label>Nachicht:</label>
                            <input type="text" name="text" placeholder="z.B Fragen/Kontakt">
                        </div>   
                        <button type="submit" class="btn" name="cours-submit">Erstellen</button>
                        </div>
                    </form>
                </section>');
            ?>
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
        </html>