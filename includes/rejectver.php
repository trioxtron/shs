<?php
    include_once 'dbh.inc.php';

    $id = $_GET['verId'];
    $sql = "UPDATE allusers SET verSend='0' WHERE idUsers=$id";
    
    if (mysqli_query($conn, $sql)) {
    echo "Abgelehnt";
    header("Location: ../admin.php");

    } 
    else {
    echo "Error updating record: " . mysqli_error($conn);
    }   
?>