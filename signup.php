<?php 
require_once('includes/common.inc.php');

$styles = 'index';

$title = "Registration";

$header_links = array(
    "about.php" => "Übersicht"
);

$content = '
<ul id="bubbles">
    <li></li>
    <li></li>
    <li></li>
</ul>
<div class="pt-10 py-16 px-8 container mx-auto flex flex-col justify-between items-center md:flex-row">
    <div class="font-bold text-4xl pb-8 md:mr-16 xl:pb-36 xl:text-6xl xl:min-w-max">
        <h1>
            Beginne zu
            <span class="accent-text">helfen.</span>
       </h1>
    </div>
    <div class="flex-grow item rounded-2xl">
        <form class="text-sm md:text-base" action="includes/signup.inc.php" method = "post">
            <div class="input-group">
                <label>Name:</label>
                <input type="text" name="uid" placeholder="Benutzername">
            </div>
            <div class="input-group">
                <label>Email:</label>
                <input type="text" name="mail" placeholder="E-mail">
            </div> 
            <div class="input-group">
                <label>Passwort:</label>
                <input type="password" name="pwd" placeholder="Passwort...">
            </div>
            <div class="input-group">
                <label>Passwort bestätigen:</label>
                <input type="password" name="pwd-repeat" placeholder="Passwort wiederholen">
            </div>
            <p class="pb-6 disclaimer xl:text-md">
                *Nur Schüler des Geschwister Scholl Gymnasiums Lebachkönnen teilnehmen.<br>
                Wenn du Helfen willst, musst du als Schüler des GSG verifiziert werden.
            </p>
            <div class="input-group">
                <button class="btn" type="submit" name="signup-submit">Registrieren</button>
            </div>
        </form>
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