<?php 
require_once('includes/common.inc.php');

$styles = 'index';

$title = "Anmeldung";

$header_links = array(
    "about.php" => "Übersicht"
);
if (isset($_SESSION['userId'])) {
    header("Location: ../shs/start.php");
} else {
    $content = '
    <ul id="bubbles">
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="pt-16 px-8 container mx-auto flex flex-col justify-between items-center md:flex-row md:pt-32">
        <div class="font-bold text-4xl pb-8 md:pr-32 xl:pb-14 xl:text-6xl xl:min-w-max">
            <h1>
                Beginne zu
                <span class="accent-text">helfen.</span>
        </h1>
        </div>
        <div class="flex-grow item rounded-2xl">
            <form action="includes/login.inc.php" method="post">
                <div class="input-group">
                    <label>Name:</label>
                    <input type="text" name="mailuid" placeholder="Benutzername/E-mail...">
                </div>
                <div class="input-group">
                    <label>Passwort:</label>
                    <input type="password" name="pwd" placeholder="Passwort...">
                </div>
                <p class="text-xl pb-6 disclaimer">
                    oder
                    <a href="signup.php">Account erstellen</a>
                </p>
                <div class="input-group">
                    <button class="btn" type="submit" name="login-submit">Anmelden</button>
                </div>
            </form>
        </div>
    </div>';
}

$footer_links = array(
    "https://www.gsglebach.de/home.html" => "Schule",
    "imprint.php" => "Impressum"
);

$footer_init_links = array(
    "signup.php" => "Registrieren"
);

require_once(TEMPLATES_ROOT.'/base.php');