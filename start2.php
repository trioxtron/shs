<?php 
require_once('includes/common.inc.php');


$styles = 'index';

$title = "Start";

is_logged_in("join");

$header_links = array(
    "discover.php" => "Kontakt"
);

$content = '
<ul id="bubbles">
    <li></li>
    <li></li>
    <li></li>
</ul>
<div class="flex flex-col justify-center items-center space-y-10 pt-10 md:pt-40 md:flex-row md:space-x-10 md:space-y-0 xl:space-x-32">
    <div class="item p-4 px-10 md:p-8 md:px-16">
        <a href="courses.php">
            <img src="images/test.png" alt="Beispielskurse" class="pb-4">
            <p class="btn">Alle Kurse</p>
        </a>
    </div>
    <div class="item p-4 px-10 md:p-8 md:px-16">
        <a href="verificate.php">
            <img src="images/test2.png" alt="Lehrer" class="pb-4">
            <p class="btn">Hilf anderen</p>
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