<?php
    include_once 'includes/dbh.inc.php';
?>
<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meine Kurse</title>
    <link rel="stylesheet" href="courses.css">
    <link rel="icon" href="images/favicon.png" type="image/png">
    <style type = "text/css">
        body {
            margin: 0;
            background-color: #2F303A;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            color: white;
            font-size: 25px; 
            text-align: left;
            border-radius: .5rem;
  
        }
        th {
            background-color: #1762A7;
            color: white;
        }

        tr:nth-child(even) {background-color: #1F303A}
        .dropbtn {
            color: white;
            background-color: #1762A7;
            padding: .75rem 1.5rem;
            border-radius: .5rem;
            text-decoration: none;
            font-size: .9rem;
            outline: none;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            margin-bottom: .5rem;
            margin-right: .5rem;
            margin-top: .5rem;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: .5rem;
        }
        .dropdown-content a{
            border-radius: .5rem;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block; }

        .dropdown:hover .dropbtn {background-color: #2180d8;}
    </style>
</head>
<body>
    <div class="content-wrap" >
        <div class = "container full-height-grow">
            <header class="main-header">
                <a href="/" class="brand-logo">
                    <img src="images/logo3.png">
                </a>
                <nav class="main-nav">
                    <ul>
                    <li><a href="start.php">Start</a></li>
                    <li><a href="courses.php">Kurse</a></li>
                    </ul>
                </nav>
            </header>

            
            <table>
                <tr>
                    <th>Fach</th>
                    <th>Klasse</th>
                    <th>Von</th>
                    <th>Preis pro Stunde:</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                <?php
                    $userId = $_SESSION['userId'];
                    $sql = "SELECT * FROM cours WHERE creatorId='$userId';";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    if ($resultCheck > 0) {
                        echo "<tabel>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['creatorId'] == $_SESSION['userId']) {
                                echo "<tr><td>" . $row['forsubject'] . "</td><td>" . $row['class'] . "</td><td>" . $row['creatorName'] . "</td><td>" . $row['price'] . " €</td><td>" . 
                                $row['creatorEmail'] . "</td><td><form method='post' action='includes/deletecourse.inc.php?id=" . $row['coursId']
                                . "'><button class ='btn' type='submit' name='search-submit'>Löschen</button></form></td></tr>";
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
                    <li><a href="createcours.php">Erstelle einen Kurs</a></li>
                </ul>
                </nav>
                <nav class="footer-nav">
                <ul>
                    <li>
                    <a href="https://www.gsglebach.de/home.html" class="social-link">
                        Schule
                    </a>
                    </li>
                    <li>
                    <a href="imprint.php" class="social-link">
                        Impressum
                    </a>
                    </li>
                </ul>
                </nav>
            </div>
        </footer>
    </div>
    
</body>
</html>