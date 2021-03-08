<?php 
require_once('includes/common.inc.php');

$styles = 'index';

$title = "Übersicht";

$header_links = array(
    "start.php" => "Starten"
);

$content = '
<ul id="bubbles">
    <li></li>
    <li></li>
    <li></li>
</ul>
<div class="pt-32 px-8 container mx-auto flex justify-center items-center">
    <div class="">
        <ul class="font-bold text-4xl">
            <li class="py-2"><a href="discover.php">> Kontakt</a></li>
            <li class="py-2"><a href="aboutus.php">> Über uns</a></li>
            <li class="py-2"><a href="project.php">> Über das Projekt</a></li>
        </ul>
    </div>
    <div class="hidden md:block">
        <img src="images/planet.png" alt="planet" class="h-64 w-64 ml-16 xl:h-80 xl:w-80 xl:ml-24">
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