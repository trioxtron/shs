<?php 
require_once('includes/common.inc.php');

$styles = 'index';

$title = "Über uns";

$header_links = array(
    "about.php" => "Übersicht"
);

$content = '
<div class="pt-6 px-8 container mx-auto flex flex-col-reverse justify-center items-center xl:flex-row">
    <div class="xl:pb-8 information">
        <h1 class="font-bold underline text-4xl pb-4 xl:text-5xl xl:pt-6">Wir</h1>
        <p>Wir sind 3 Schüler des Geschwister Scholl Gymnasiums Lebach, die sich als Aufgabe gesetzt haben,das Projekt<br>"Schüler helfen Schülern" unserer Schule zu digitalisieren, um den bestmöglichen Lernerfolg zu garantieren</p>
        <h1 class="font-bold underline text-4xl pb-4 pt-8 xl:text-4xl">Ben</h1>
        <p>Ben, 16 Jahre ist insbesonder zuständig für Design, hat alles Bilder entworfen und das Design der Seite entworfen.</p>
        <h1 class="font-bold underline text-4xl pb-4 pt-8 xl:text-4xl">Fedja</h1>
        <p>Fedja, 16 Jahre ist zuständig für Organisation, Management und Idee Entwürfe.</p>
        <h1 class="font-bold underline text-4xl pb-4 pt-8 xl:text-4xl">Noah</h1>
        <p>Noah, 16 Jahre ist derzeit zuständig für den Code und Oberfläche der Seite.</p>
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