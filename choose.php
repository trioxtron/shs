<?php 
require_once('includes/common.inc.php');


$styles = 'index';

$title = "Auswahl";

is_logged_in("join");

$header_links = array(
    "discover.php" => "Kontakt"
);

if (!isset($_GET['id'])) {
    Header('Location: ../shs/start.php');
}

$content = '
<ul id="bubbles">
    <li></li>
    <li></li>
    <li></li>
</ul>
<div class="flex flex-col justify-center items-center space-y-10 pt-10 md:pt-40 md:flex-row md:space-x-10 md:space-y-0 xl:space-x-32">
    <div class="item p-4 px-10 md:p-8 md:px-16">
        <a href="#">
            <img src="#" alt="Chat-Bild" class="pb-4">
            <p class="btn">Chat starten</p>
        </a>
    </div>
    <div class="item p-4 px-10 md:p-8 md:px-16">
        <a href="contact.php?id=' . $_GET["id"] .'">
            <img src="#" alt="Email-Bild" class="pb-4">
            <p class="btn">Email schreiben</p>
        </a>
    <div>
</div>';

$footer_links = array(
    "https://www.gsglebach.de/home.html" => "Schule",
    "imprint2.php" => "Impressum"
);

$footer_init_links = array(
    "join.php" => "Anmelden"
);

require_once(TEMPLATES_ROOT.'/base.php');