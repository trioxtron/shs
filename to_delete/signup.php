<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="styles.css" rel="stylesheet">
  <link href="join.css" rel="stylesheet">
  <link rel="icon" href="images/favicon.png" type="image/png">
  <title>Registration</title>
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
      <form class = "join-form" action="includes/signup.inc.php" method = "post">
        <div class="input-group">
          <label>Name:</label>
          <input type="text" name="uid" placeholder="Benutzername">
        </div>
        <div class="input-group">
          <label>Email:</label>
          <input type="text" name="mail" placeholder="E-mail">
        </div>
        <div class="input-group">
          <label>Passwort:</label>
          <input type="password" name="pwd" placeholder="Passwort">
        </div>
        <div class="input-group">
          <label>Passwort bestätigen:</label>
          <input type="password" name="pwd-repeat" placeholder="Passwort wiederholen">
        </div>
        <div class = "disclaimer">
            *Nur Schüler des Geschwister Scholl Gymnasiums Lebach<br>
            können teilnehmen. Wenn du Helfen willst,<br>
            musst du als Schüler verifiziert werden.
        </div>
        <div class="input-group">
        <button class = "btn" type = "submit" name="signup-submit">Registrieren</button>
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
          <li><a href="join.php">Anmelden</a></li>
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
            <a href="#" class="social-link">
              Impressum
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </footer>
</body>
</html>