<?php
    include_once 'dbh.inc.php';
?>


<?php
    $id = $_GET['verId'];
    $name = $_GET['verName'];
    echo $id;
    echo $name;
    $sql = "UPDATE allusers SET ver='1' WHERE idUsers='$id'";
    
    if (mysqli_query($conn, $sql)) {
    echo "Erfolgreich verifiziert";
    header("Location: ../admin.php");
    } 
    else {
    echo "Error updating record: " . mysqli_error($conn);
    }   
?>