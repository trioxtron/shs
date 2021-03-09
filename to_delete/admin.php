<?php
    include_once 'includes/dbh.inc.php';
?>

<?php
    session_start();
?>
<?php
  if ($_SESSION['userId'] != 11 AND $_SESSION['userUid'] != 'Admin') {
    header("Location: start.php");
  }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" href="images/favicon.png" type="image/png">
    <title>Verifikation</title>
    <style type = "text/css">
        table {
            border-collapse: collapse;
            width: 100%;
            color: white;
            font-size: 25px; 
            text-align: center;
        }
        th {
            background-color: #1762A7;
            color: white;
            text-align: center;
        }

        tr:nth-child(even) {background-color: #1F303A}
    </style>
</head>
<body>
    <form class = "search-form" action="includes/admin.inc.php" method="post" style = "margin: 1rem;">
        <input type="text" name="Id" placeholder="ID eingeben">
        <input type="text" name="Name" placeholder="Name eingeben">
        <button class ="btn" type="submit" name="login-submit">Suche</button>
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Angefragt</th>
            <th>Verifiziert</th>
        </tr>    
        <?php
            $sql = "SELECT * FROM allusers WHERE verSend ='1';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                echo "<tabel>";
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['ver'] == 0) {
                        echo "<tr><td>" . $row['idUsers'] . "</td><td>" . $row['uidUsers'] . "</td><td>" . $row['emailUsers'] . "</td><td>" . $row['verSend'] . "</td><td>" . 
                        $row['ver'] . "</td></tr>";
                    } 
                }
                echo "</tabel>";
            }
            
        ?>
    </table>
    </div>
        <footer class="main-footer">
            <div class="container">
                <nav class="footer-nav">
                <ul>
                    <li><a href="start.php">Start</a></li>
                </ul>
                </nav>
                <nav class="footer-nav">
                <ul>
                    <li>
                    <a href="https://www.gsglebach.de/home.html" class="social-link">
                        Schule
                    </a>
                    </li>
                </ul>
                </nav>
            </div>
        </footer>
    </div>
</body>
</html>