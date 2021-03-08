<?php 
require_once('includes/common.inc.php');


$styles = 'index';

$title = "Forum";

is_logged_in("join");

$header_links = array(
    "start.php" => "Start",
    "coures" => "Kurse" 
);


$name = $_SESSION['userUid'];
$sql = "SELECT * FROM forum;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$chat_content = "";
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['creatorName'] != $name){
            $chat_content .= "
            <div class='flex-shrink p-1.5 rounded-2xl rounded-tl-none mb-4 inline-block foreign-message-box mr-auto'>
                <div class='flex items-center'>
                    <p class='foreign-message'>{$row['creatorName']}</p>
                    <p class='disclaimer text-xs pl-2'>{$row['postTime']}</p>
                </div>
                <p class=''>{$row['content']}</p>
            </div>";
        }
        else {
            $chat_content .= "
            <div class='flex-shrink p-1.5 rounded-2xl rounded-tr-none mb-4 inline-block ml-auto own-message-box'>
                <p class='disclaimer text-xs text-right'>{$row['postTime']}</p>
                <p class=''>{$row['content']}</p>
            </div>";
        }         
    }
}

$content = "
<div class='flex flex-col justify-center items-center py-10 md:flex-row mx-6'>
    <div class='container item pb-2 '>
        <div class='flex flex-col chat'>    
            {$chat_content}
        </div>
    </div>
</div>";



require_once(TEMPLATES_ROOT.'/forum_base.php');