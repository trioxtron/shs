<?php
    include_once 'dbh.inc.php';

    $id = $_GET['verId'];
    $sql = "UPDATE allusers SET ver='1' WHERE idUsers=$id";
    
    if (mysqli_query($conn, $sql)) {
    echo "Erfolgreich verifiziert";
    header("Location: ../admin.php");
    } 
    else {
    echo ("Internal Server Error");
    }   
?>