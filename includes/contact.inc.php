<?php
    $text = $_POST['text'];
    $object = $_POST['object'];
    $coursId = $_GET['id'];
?>

<?php
    include_once 'dbh.inc.php';
    $sql = "SELECT * FROM cours WHERE coursId = '$coursId';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        echo "<tabel>";
        while ($row = mysqli_fetch_assoc($result)) {
            $ReceiverMail = $row['creatorEmail'];
        }
    }
?>

<?php
    session_start();
    $senderMail = $_SESSION['userEmail'];
?>

<?php
    if(null !== $_POST['text'] AND $_POST['object']) {
        header("Location: https://mail.google.com/mail/?view=cm&fs=1&to=" . $ReceiverMail . "&su=" . $object . "&body=" . $text);
    }
    else {
        header("Location: ../contact.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo("An Ersteller von Kurs mit Id: " . $coursId . " Nachicht mit Betreff: " . $object . " und Text: " . $text);
    ?>
</body>
</html>