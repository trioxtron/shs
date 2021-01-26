<?php
    $id = $_POST['Id'];
    $name = $_POST['Name'];

?>


<?php
    include_once 'dbh.inc.php';
?>

<?php
    session_start();
?>
<?php
  if ($_SESSION['userId'] != 11 AND $_SESSION['userUid'] != 'Admin') {
    header("Location: ../start.php");
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikation - Admin</title>
    <style type = "text/css">
        body {
            padding: 0;
            margin: 0;
            background-color: #2F303A;
            font-family: Poppins, sans-serif;
            font-size: 1.2rem;
            color: white;
            min-height: 100vh;
            overflow:hidden;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            color: #white;
            font-size: 25px; 
            text-align: center;
            margin-top: 1rem;
        }
        th {
            background-color: #1762A7;
            color: white;
        }
        .btn {
            color: white;
            background-color: #1762A7;
            padding: .30rem 1rem;
            margin-top: 1rem;
            border-radius: .5rem;
            text-decoration: none;
            font-size: .9rem;
            outline: none;
            border: none;
            cursor: pointer;
        }

        .btn_submit {
            color: white;
            background-color: #1762A7;
            padding: .30rem 1rem;
            margin-top: .2rem;
            border-radius: .5rem;
            text-decoration: none;
            font-size: .9rem;
            outline: none;
            border: none;
            cursor: pointer;
        }

        .btn:hover, .btn_submit:hover {
             background-color: #2180d8;
         }

        .btn:focus, .btn_submit:hover {
            background-color: #2796ff;
         }
         

        tr:nth-child(even) {background-color: #1F303A}
    </style>
</head>
<body>
    <form class = "search-form" action="admin.inc.php" method="post">
        <input type="text" name="Id" placeholder="ID eingeben">
        <input type="text" name="Name" placeholder="Name eingeben">
        <button class ="btn" type="submit" name="login-submit">Suche</button>
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>gesendet</th>
            <th>verifiziert</th>
            <th>Annehmen</th>
            <th>Ablehnen</th>
        </tr>
        <?php
            $sql = "SELECT * FROM allusers WHERE idUsers = '$id' AND uidUsers = '$name' AND ver = '0' AND verSend = '1';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                echo "<tabel>";
                if ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row['idUsers'] . "</td><td>" . $row['uidUsers'] . "</td><td>" . $row['emailUsers'] . "</td><td>" . $row['verSend'] . "</td><td>" . 
                        $row['ver'] . "</td><td><form  class='' action = 'ver.php?verId=$id&verName=$name' method = 'post'><button class = 'btn_submit' type = 'submit' name = 'button'>Verifizieren</button></form></td>
                        <td><form  class='' action = 'rejectver.php?verId=$id&verName=$name' method = 'post'><button class = 'btn_submit' type = 'submit' name = 'button'>Ablehnen</button></form></td></tr>";
    
                }
                echo "</tabel>";
            }
            else {
                echo "No User Found! Please Try again!";
            }
            
        ?>
    </table>
</body>
</html>