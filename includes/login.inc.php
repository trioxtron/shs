<?php

if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid || $password)) {
        header("Location: ../join.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM allusers WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../join.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false) {
                    header("Location: ../join.php?error=wrongpassword");
                    exit();
                }
                else if($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    $_SESSION['userEmail'] = $row['emailUsers'];
                    $_SESSION['sendVer'] = $row['verSend'];
                    $_SESSION['verificated'] = $row['ver'];

                    header("Location: ../join.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../join.php?error=wrongpassword");
                    exit();
                }
            }
            else {
                header("Location: ../join.php?error=nouser");
            exit();
            }
        }
    }
}

else {
    header("Location: ../join.php");
    exit();
}