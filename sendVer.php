<?php
    include_once 'includes/dbh.inc.php';
?>

<?php
    session_start();
?>

<?php
    $id = $_SESSION['userId'];
    $sql = "UPDATE allusers SET verSend='1' WHERE idUsers='$id'";
    $_SESSION['sendVer'] = '1';
    if (mysqli_query($conn, $sql)) {
        if (isset($_SESSION['userId'])) {
            if ($_SESSION['verificated'] == 0) {

              echo('<!DOCTYPE html>
              <html lang="en">
              <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link href="sendVer.css" rel="stylesheet">
                <link rel="icon" href="images/favicon.png" type="image/png">
                <title>Verifikation beantragen</title>
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
                    <form action="courses.php" class="join-form">
                      <div class="input-group">
                        <p>
                          Deine Verifikation ist in Bearbeitung!<br>
                          Bitte habe noch etwas Geduld,<br>
                          bis du verfiziert bist.<br>
                          Bis dahin, kannst du dir schonmal:
                        </p>
                        <button type="submit" class="btn">Andere Kurse ansehen</button>
                      </div>
                    </form>
                  </section>
                </div>
              
                <div class="join-page-circle-1"></div>
                <div class="join-page-circle-2"></div>
              
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
                          <a href="#" class="social-link">
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
            header('Location: createcours.php');
          }
        }
        else {
          header('Location: join.php');
        }
    }  
    else {
    echo "Error updating record: " . mysqli_error($conn);
    }   
?>