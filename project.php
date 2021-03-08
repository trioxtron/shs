<?php 
require_once('includes/common.inc.php');

$styles = 'index';

$title = "Über uns";

$header_links = array(
    "about.php" => "Übersicht"
);

$content = '
<ul id="bubbles">
    <li></li>
    <li></li>
    <li></li>
</ul>
<div class="pt-32 px-8 container mx-auto flex flex-col-reverse justify-center items-center md:pt-8 xl:flex-row">
    <div>
        <h1 class="font-bold text-4xl pb-4 xl:text-6xl xl:pt-32">Unser Ziel:</h1>
        <p>Wir wollen es Schülern im digitalen Zeitalter <br>ermöglichen, sich gegenseitig in der Schule zu helfen.</p>
        <h1 class="font-bold text-4xl pb-4 pt-8 xl:text-6xl">Unser Konzept:</h1>
        <p>Wenn du kostengünstige oder kostenlose Nachhilfe sucht, melde dich an.</br>Wenn du selber Unterricht geben möchtest, musst du ein Schüler des GSG-Lebach sein.</br>Alle Nachhilfelehrer sind von unserer Schule als gute Schüler verifiziert,</br>so hast du Sicherheit bei der Auswahl eines Lehrers.</p>
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