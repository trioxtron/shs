<?php

session_start();

define('PROJECT_ROOT', dirname(__FILE__).'/..');
define('TEMPLATES_ROOT', dirname(__FILE__).'/../templates');

require_once(PROJECT_ROOT.'/includes/dbh.inc.php');

$with_header = true;
$content = '';
$title = '';

function load_template($template, $vars = array()) {
    extract($vars);
    
    ob_start();
    include(TEMPLATES_ROOT.'/'.$template);
    $content = ob_get_contents();
    ob_end_clean();

    return $content;
}

function is_logged_in($direction) {
    if (!isset($_SESSION['userId'])) {
        header("Location: ../shs/{$direction}.php");
    }
}