<?php 
require_once('includes/common.inc.php');


$styles = 'index';

$title = "Admin";

is_logged_in("join");

$header_links = array(
    "start.php" => "Startseite"
);

if ($_SESSION['userUid'] != 'Admin') {
    header("Location: ../shs/start.php");
}

$sql = "SELECT * FROM allusers WHERE verSend ='1';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$table_content = "";
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['ver'] == 0) {
            $table_content .= "
            <tr class='space-x-10 xl:space-x-0'>
            <td>{$row['idUsers']}</td>    
            <td>{$row['uidUsers']}</td>    
            <td>{$row['emailUsers']}</td>    
            <td>
                <a href='includes/ver.php?verId={$row['idUsers']}' class='btn mx-1'>Annehmen</a>
                <a href='includes/rejectVer.php?verId={$row['idUsers']}' class='btn mx-1'>Ablehnen</a>
            </td>
            </tr>";
        }
    }<
}


$content = "
<div class='container mx-auto text-sm md:text-xl py-8'>
    <form class='search-bar mx-4' action='filtered.admin.php' method='post'>
        <input type='text' name='Name' placeholder='Name eingeben'>
        <button class='btn' type='submit' name='login-submit'>Suche</button>
    </form>
    <table class='mt-4 mx-4'>
        <tr class='table-profile'>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th class='pl-20'>Verifikationen</th>
        </tr>
        {$table_content}
    </table>
</div>
";


$footer_links = array(
    "https://www.gsglebach.de/home.html" => "Schule",
    "imprint.php" => "Impressum"
);

$footer_init_links = array(
    "join.php" => "Anmelden"
);

require_once(TEMPLATES_ROOT.'/base.php');