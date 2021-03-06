<?php
require_once('includes/common.inc.php');

$styles = 'index';

$title = 'Schüler helfen Schülern';

$header_links = array(
    "discover2.php" => "Kontakt",
    "about2.php" => "Über uns"
);

$content = '
<ul id="bubbles">
    <li></li>
    <li></li>
    <li></li>
</ul>
<div class="pt-5 container mx-auto mb-auto px-8 flex flex-col-reverse xl:flex-row xl:pt-72 2xl:pt-5">
    <div class="flex-grow hidden xl:block self-end w-1/3">
        <img src="images/char.png" alt="human" class="relative top-3">
    </div>
    <div class="pt-52 xl:pt-0">
        <h1 class="font-bold text-6xl pb-5 xl:pt-32">Schüler helfen Schülern</h1>
        <p class="text-2xl pb-4">
            Melde dich an um zu helfen,<br>
            oder um Nachhilfe zu bekommen
        </p>
        <a href="start.php" class="text-sm p-2 px-4 rounded-lg button">Mach mit</a>
    </div>
</div>';

$footer_links = array(
    "https://www.gsglebach.de/home.html" => "Schule",
    "imprint2.php" => "Impressum"
);

$footer_init_links = array(
    "join.php" => "Anmelden"
);

require_once(TEMPLATES_ROOT.'/base.php');