<?php 
require_once('includes/common.inc.php');
include_once ('includes/dbh.inc.php');

$styles = 'index';

$title = "Verifikation gesendet";

is_logged_in("join");

$header_links = array(
    "discover.php" => "Kontakt"
);

$id = $_SESSION['userId'];
$sql = "UPDATE allusers SET verSend='1' WHERE idUsers='$id'";
if (mysqli_query($conn, $sql)) {
    if (isset($_SESSION['userId'])) {
        if ($_SESSION['verificated'] == 0) {

            $content = '
            <ul id="bubbles">
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="flex justify-center space-y-10 pt-40 md:flex-row md:space-x-10 md:space-y-0 xl:space-x-32">
                <div class="item p-4 px-10 md:p-8 flex flex-col justify-center items-center space-y-6">
                    <p class="text-xl">Deine Verifikation ist in Bearbeitung!<br>Bitte habe noch etwas Geduld,<br>bis du verfiziert bist.</p>
                    <a href="courses.php" class="btn">Andere Kurse ansehen</a>
                </div>
            </div>';

            $footer_links = array(
                "https://www.gsglebach.de/home.html" => "Schule",
                "imprint.php" => "Impressum"
            );

            $footer_init_links = array(
                "join.php" => "Anmelden"
            );

        } else {
            header('Location: createcours.php');
        }
    } else {
        header('Location: join.php');
    }
} else {
    echo 'Internal Server Error';

}   

require_once(TEMPLATES_ROOT.'/base.php');