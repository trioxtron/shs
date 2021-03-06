<?php
    include_once 'dbh.inc.php';

    $id = $_GET['id'];
    $sql="DELETE FROM cours WHERE coursId='$id';";
    
    if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: ../usercourses.php");
    } 
    else {
    echo 'Internal Server Error';
    }   