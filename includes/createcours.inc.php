<?php
    session_start();
?>

<?php

if (isset($_POST['cours-submit'])) {

    require 'dbh.inc.php';

    $subject = $_POST['subject'];
    $class = $_POST['forclass'];
    $price = $_POST['price'];
    $id = $_SESSION['userId'];
    $name = $_SESSION['userUid'];
    $mail =$_SESSION['userEmail'];
    $sql = "INSERT INTO cours (forsubject, class, creatorId, creatorName, creatorEmail,
    price) VALUES ('$subject', '$class', '$id', '$name', '$mail', '$price');";
    mysqli_query($conn, $sql);

    header("Location: ../join.php");
    exit();
}
?>
