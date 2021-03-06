<?php
    session_start();
?>

<?php

if (isset($_POST['send'])) {

    require 'dbh.inc.php';
    $content = $_POST['text'];
    $date = date("Y-m-d");
    $id = $_SESSION['userId'];
    $name = $_SESSION['userUid'];
    if ($content != "") {
        $sql = "INSERT INTO forum (content, postDate, creatorName, creatorId) VALUES ('$content', '$date', '$name', '$id');";
        mysqli_query($conn, $sql);

        header("Location: ../forum.php");
        exit();
    }
    else {
        header("Location: ../forum.php");
    }
}
?>