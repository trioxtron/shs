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

$name = $_SESSION['userUid'];
$sql = "SELECT * FROM chat;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$chat_content = "";
if ($resultCheck > 0) {
        if ($row['creatorName'] != $name){
            echo "<div class = 'name'>" . $row['creatorName'] . " :</div> " . $row['content'] . " " . "<a class = 'date'>" . 
            $row['postDate'] . "</a><br>" ;
        }
        else {
            echo "<div class = 'name2'>" . $row['creatorName'] . " :</div> " . $row['content'] . " " . "<a class = 'date'>" . 
            $row['postDate'] . "</a><br>" ;
        }         
    }
}

$content = '
<ul id="bubbles">
    <li></li>
    <li></li>
    <li></li>
</ul>
<div class="flex flex-col justify-center items-center space-y-10 pt-10 md:pt-32 md:flex-row md:space-x-10 md:space-y-0 xl:space-x-32">
    <div class="container item">

    </div>
</div>';



require_once(TEMPLATES_ROOT.'/chat_base.php');