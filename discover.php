<?php 
require_once('includes/common.inc.php');

$styles = 'index';

$title = "Kontakt";

$header_links = array(
    "about.php" => "Übersicht"
);

$content = '
<ul id="bubbles">
    <li></li>
    <li></li>
    <li></li>
</ul>
<div class="pt-32 px-8 container mx-auto flex justify-center items-center xl:pt-8">
    <div class="xl:pb-14">
        <h1 class="font-bold text-4xl pb-4 xl:text-6xl xl:pt-40">Kontaktiere uns:</h1>
        <p class="max-w-max border-b-2 border-gray-50 mb-2">Unsere Emailadressen</p>
        <p>• fed.belo@gmx.de<br>• schumacherb97@gmail.com<br>• noah.don.kretzschmar@gmail.com</p>
    </div>
    <div class="hidden md:block">
        <img src="images/planet.png" alt="planet" class="h-64 w-64 mt-16 ml-16 xl:h-80 xl:w-80 xl:ml-24">
    </div>
</div>';

$footer_links = array(
    "https://www.gsglebach.de/home.html" => "Schule",
    "imprint.php" => "Impressum"
);

$footer_init_links = array(
    "join.php" => "Anmelden"
);

require_once(TEMPLATES_ROOT.'/base.php');