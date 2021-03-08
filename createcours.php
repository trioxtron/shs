<?php
require_once('includes/common.inc.php');

$styles = 'index';

$title = 'Kurs erstellen';

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
<div class="flex justify-center space-y-10 pt-40 md:flex-row md:space-x-10 md:space-y-0 xl:space-x-32">
    <div class="item flex flex-col justify-center items-center space-y-6">
        <form class="join-form w-64 md:w-96" action="includes/createcours.inc.php" method="post">
            <div class="input-group">
                <label>Fach:</label>
                <select type="text" name="subject" placeholder="Fach...">
                <option value="Deutsch">Deutsch</option>
                <option value="Englisch">Englisch</option>
                <option value="Französisch">Französisch</option>
                <option value="Mathe">Mathematik</option>
                <option value="Physik">Physik</option>
                <option value="Chemie">Chemie</option>
                </select>
            </div>
            <div class="input-group">
                <label>Für Klasse:</label>
                <select type="text" name="forclass" placeholder="Klasse...">
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
            </div> 
                <button type="submit" class="btn" name="cours-submit">Erstellen</button>
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