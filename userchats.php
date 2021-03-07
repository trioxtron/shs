<?php 
require_once('includes/common.inc.php');


$styles = 'index';

$title = "Meine Chats";

is_logged_in("join");

$header_links = array(
    "usercourses.php" => "Meine Kurse"
);

$userId = $_SESSION['userId'];
$sql = "SELECT * FROM cours WHERE creatorId=$userId;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$table_content = "";
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if (isset($_GET['class'])) {
            if ($row['forsubject'] == $_GET['class']){
                $table_content .= "
                <tr class='space-x-10 xl:space-x-0'>
                <td>{$row['creatorName']}</td>    
                <td>{$row['creatorEmail']}</td>        
                <td><a href='chat.php?id={$row['coursId']}' class='btn'>Chat öffnen</a></td>   
                </tr>";
            }
        } else {
            $table_content .= "
            <tr class='space-x-10 xl:space-x-0'>
            <td>{$row['creatorName']}</td>    
            <td>{$row['creatorEmail']}</td>      
            <td><a href='chat.php?id={$row['coursId']}' class='btn'>Chat öffnen</a></td>   
            </tr>";
            
        }
    }
}


$content = "
<div class='container mx-auto mb-auto text-sm md:text-xl pt-10 pb-10 sm:pt-20'>
    <table class=''>
        <tr class='table-profile'>
            <th>Chat mit</th>
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