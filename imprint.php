<?php
require_once('includes/common.inc.php');

$styles = 'index';

$title = 'Impressum';

$header_links = array(
    "join.php" => "Starten",
    "about.php" => "Übersicht"
);

$content = '
<ul id="bubbles">
    <li></li>
    <li></li>
    <li></li>
</ul>
<div class="pt-16 px-8 container mx-auto flex justify-center items-center">
    <div class="xl:pb-14">
        <h1 class="font-bold text-4xl pb-4 xl:text-6xl xl:pt-32">Du brauchst Hilfe?<br>Kontaktiere uns:</h1>
        <p class="max-w-max border-b-2 border-gray-50 mb-2 text-2xl">Unsere Emailadressen</p>
        <p>• fed.belo@gmx.de<br>• schumacherb97@gmail.com<br>• noah.don.kretzschmar@gmail.com</p>
        <p class="mt-5 max-w-max border-b-2 border-gray-50 mb-2 text-2xl">Impressum der Schule</p>
        <a href="https://www.gsglebach.de/impressum.html" class="text-xl font-bold hover:text-gray-400">> GSG Lebach <</a>
    </div>
    <div class="hidden md:block">
        <img src="images/Char2.png" alt="man sitting on a rocket" class="h-64 w-64 ml-16 xl:h-80 xl:w-80 xl:ml-24">
    </div>
</div>';

$footer_links = array(
    "https://www.gsglebach.de/home.html" => "Schule",
    "about.php" => "Über uns"
);

$footer_init_links = array(
    "join.php" => "Anmelden"
);

require_once(TEMPLATES_ROOT.'/base.php');