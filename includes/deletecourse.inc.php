<?php
    include_once 'dbh.inc.php';
?>

<?php
    $id = $_GET['id'];
    echo $id;
    $sql="DELETE FROM cours WHERE coursId='$id';";
    
    if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: ../usercourses.php");
    } 
    else {
    echo "Error updating record: " . mysqli_error($conn);
    }   
?>