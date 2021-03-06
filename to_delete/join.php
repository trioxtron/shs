<?php
    session_start();
?>

<?php
  if (isset($_SESSION['userId'])) {

    header("Location: start.php");
    echo'<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="styles.css" rel="stylesheet">
      <link href="join.css" rel="stylesheet">
      <link rel="icon" href="images/favicon.png" type="image/png">
      <title>Anmeldung</title>
    </head>
    <body class="full-height-grow">
      <div class="container full-height-grow">
        <header class="main-header">
          <a href="/" class="brand-logo">
            <img src="images/logo2.png">
          </a>
          <nav class="main-nav">
            <ul>
              <form action="includes/logout.inc.php" method="post">
                <button class="btn_logout" type="submit" name="logout-submit">Abmelden</button>
              </form>
              <li><a href="discover.php">Kontakt</a></li>
            </ul>
          </nav>
        </header>
          <section class="join-main-section">
            <h1 class="join-text">
              Beginne zu
              <span class="accent-text">helfen.</span>
            </h1>
            <form class = "join-form" action="includes/login.inc.php" method="post">
              <div class="input-group">
                <label>Name:</label>
                <input type="text" name="mailuid" placeholder="Benutzername/E-mail...">
              </div>
              <div class="input-group">
                <label>Password:</label>
                <input type="password" name="pwd" placeholder="Passwort...">
              </div>
              <div class = "disclaimer">
                Oder <a href="signup.php">Account erstellen</a>
              </div>
              <div class="input-group">
                <button class ="btn" type="submit" name="login-submit">Anmelden</button>
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
              <li>
                <div class="join-page-circle-2"></div>
              </li>
            </ul>
          </nav>
        </div>
      </footer>
    </body>
    </html>';
  }


  else{
    echo'<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="styles.css" rel="stylesheet">
      <link href="join.css" rel="stylesheet">
      <link rel="icon" href="images/favicon.png" type="image/png">
      <title>Anmeldung</title>
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
          <section class="join-main-section">
            <h1 class="join-text">
              Beginne zu
              <span class="accent-text">helfen.</span>
            </h1>
            <form class = "join-form" action="includes/login.inc.php" method="post">
              <div class="input-group">
                <label>Name:</label>
                <input type="text" name="mailuid" placeholder="Benutzername/E-mail...">
              </div>
              <div class="input-group">
                <label>Passwort:</label>
                <input type="password" name="pwd" placeholder="Passwort...">
              </div>
              <div class = "disclaimer">
                Oder <b><a href="signup.php">Account erstellen</a></b>
              </div>
              <div class="input-group">
                <button class="btn" type="submit" name="login-submit">Anmelden</button>
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
              <li><a href="signup.php">Registrieren</a></li>
            </ul>
          </nav>
        </div>
      </footer>
    </body>
    </html>';
  }

?>