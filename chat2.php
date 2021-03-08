<?php 
require_once('includes/common.inc.php');


$styles = 'index';

$title = "Auswahl";

is_logged_in("join");

$header_links = array(
    "start.php" => "Start",
    "coures" => "Kurse"
);

if (!isset($_GET['id'])) {
    Header('Location: ../shs/start.php');
}

$content = '
<ul id="bubbles">
    <li></li>
    <li></li>
    <li></li>
</ul>
<div class="flex flex-col justify-center items-center space-y-10 pt-10 md:pt-32 md:flex-row md:space-x-10 md:space-y-0 xl:space-x-32">
    <div class="item p-4 px-10 md:p-8 md:px-16">
        <a href="#">
            <img src="images/chat.png" alt="Chat-Bild" class="pb-4">
            <p class="btn">Chat starten</p>
        </a>
    </div>
    <div class="item p-4 px-10 md:p-8 md:px-16">
        <a href="contact.php?id=' . $_GET["id"] .'">
            <img src="images/mail.png" alt="Email-Bild" class="pb-4">
            <p class="btn">Email schreiben</p>
        </a>
    <div>
</div>';



require_once(TEMPLATES_ROOT.'/chat_base.php');