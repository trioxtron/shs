<?php
require_once('includes/common.inc.php');

$styles = 'index';

$title = "Verifikation";

is_logged_in("join");

$header_links = array(
    "discover.php" => "Kontakt"
);

$need_signout = True;

$id = $_SESSION['userId'];
$sentVerification = $conn->query("SELECT verSend FROM allusers WHERE idUsers=$id")->fetch_object()->verSend;

if (isset($_SESSION['userId'])) {
  if ($_SESSION['verificated'] == 0) {
    if ($sentVerification == 0) {
      $content = load_template('partials/verification.php');
    } else {
      header('Location: sendVer.php');
    }
  } else {
    header('Location: createcours.php');
  }
} else {
  header('Location: join.php');
}

$footer_links = array(
    "https://www.gsglebach.de/home.html" => "Schule",
    "imprint.php" => "Impressum"
);

$footer_init_links = array(
    "join.php" => "Anmelden"
);

require_once(TEMPLATES_ROOT.'/base.php');