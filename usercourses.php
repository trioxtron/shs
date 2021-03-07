<?php 
require_once('includes/common.inc.php');


$styles = 'index';

$title = "Start";

is_logged_in("join");

$header_links = array(
    "courses.php" => "Alle Kurse"
);

$userId = $_SESSION['userId'];
$sql = "SELECT * FROM cours WHERE creatorId='$userId';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$table_content = "";
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if (isset($_GET['class'])) {
            if ($row['forsubject'] == $_GET['class']){
                $table_content .= "
                <tr class='space-x-10 xl:space-x-0'>
                <td>{$row['forsubject']}</td>    
                <td>{$row['class']}</td>    
                <td>{$row['creatorName']}</td>    
                <td>{$row['creatorEmail']}</td>    
                <td><a href='includes/deletecourse.inc.php?id={$row['coursId']}' class='btn'>löschen</a></td>   
                </tr>";
            }
        } else {
            $table_content .= "
            <tr class='space-x-10 xl:space-x-0'>
            <td>{$row['forsubject']}</td>    
            <td>{$row['class']}</td>    
            <td>{$row['creatorName']}</td>    
            <td>{$row['creatorEmail']}</td>    
            <td><a href='includes/deletecourse.inc.php?id={$row['coursId']}' class='btn'>löschen</a></td>   
            </tr>";
            
        }
    }
}


$content = "
<div class='container mx-auto mb-auto text-sm md:text-xl pt-20 pb-10'>
    <div class='flex justify-between pb-1'>
        <div class='dropdown'>
            <p class='btn w-20'>Fach</p>
            <ul class='rounded-xl'>
                <li><a href='courses.php' class='allcourses'>Alle Kurse</a></li>
                <li><a href='courses.php?class=Deutsch'>Deutsch</a></li>
                <li><a href='courses.php?class=English'>Englisch</a></li>
                <li><a href='courses.php?class=Französisch'>Französisch</a></li>
                <li><a href='courses.php?class=Mathe'>Mathemathik</a></li>
                <li><a href='courses.php?class=Physik'>Physik</a></li>
                <li><a href='courses.php?class=Chemie'>Chemie</a></li>
            </ul>
        </div>
        <a href='createcours.php' class='btn'>Kurs erstellen</a>
    </div>
    <table>
        <tr class='table-profile'>
            <th>Fach</th>
            <th>Klasse</th>
            <th>Von</th>
            <th>Email</th>
            <th></th>
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