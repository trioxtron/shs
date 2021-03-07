<?php 
require_once('includes/common.inc.php');

$styles = 'index';

$title = "Email verfassen";

$header_links = array(
    "about.php" => "Über uns"
);

if (!isset($_GET['id'])) {
    Header('Location: ../shs/start.php');
}

$content = '
<div class="flex justify-center space-y-10 pt-40 md:flex-row md:space-x-10 md:space-y-0 xl:space-x-32">
    <div class="mx-4 w-96 item rounded-2xl">
        <form class = "join-form" action="includes/contact.inc.php?id=' . $_GET["id"] . '" method="post">
            <div class="input-group">
                <label>Betreff:</label>
                <input type="text" name="object" placeholder="z.B Kurs...">
            </div>
            <div class="input-group">
                <label>Nachicht:</label>
                <input type="text" name="text" placeholder="z.B Fragen / Anmerkungen">
            </div>   
            <button type="submit" class="btn" name="cours-submit">Erstellen</button>
        </form>
    </div>
</div>';

$footer_links = array(
    "https://www.gsglebach.de/home.html" => "Schule",
    "imprint.php" => "Impressum"
);

$footer_init_links = array(
    "signup.php" => "Registrieren"
);

require_once(TEMPLATES_ROOT.'/base.php');