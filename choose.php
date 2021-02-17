<!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="start.css" rel="stylesheet">
        <link rel="icon" href="images/favicon.png" type="image/png">
        <title>Auswahl</title>
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
                <li><a href="usercourses.php">Meine Kurse</a></li>
              </ul>
            </nav>
          </header>
          <section class="join-main-section">
            <form action="#" class="join-form">
              <div class="input-group">
                <img class = "img" src="#" alt="">
                <button type="submit" class="btn">Chat starten</button>
              </div>
            </form>
            <?php 
            echo 
            ("<form class='join-form' method='post' action='contact.php?id=" . $_GET["id"] . "'>
            <div class='input-group'><img class = 'img' src='#' alt=''><button class ='btn' type='submit' name='search-submit'>Email schreiben</button></div>
            </form>"); ?>
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
      </html>