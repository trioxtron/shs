<?php
    session_start();
?>

<?php

if (isset($_POST['send'])) {

    require 'dbh.inc.php';
    $content = $_POST['text'];
    $time = date("H:i");
    $id = $_SESSION['userId'];
    $name = $_SESSION['userUid'];
    if ($content != "") {
        $sql = "INSERT INTO forum (content, postTime, creatorName, creatorId) VALUES ('$content', '$time', '$name', '$id');";
        mysqli_query($conn, $sql);

        header("Location: ../forum.php");
        exit();
    }
    else {
        header("Location: ../forum.php");
    }
}
?>