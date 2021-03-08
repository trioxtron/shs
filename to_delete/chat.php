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
            <link href="styles.css" rel="stylesheet">
            <link href="chat.css" rel="stylesheet">
            <link rel="icon" href="images/favicon.png" type="image/png">
            <title>Chat</title>
        </head>
        <body class="full-height-grow">
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
            <?php
                $name = $_SESSION['userUid'];
                $sql = "SELECT * FROM chat;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    echo "<div class='chatbox'> <div class = 'chat'>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['creatorName'] != $name){
                            echo "<div class = 'name'>" . $row['creatorName'] . " :</div> " . $row['content'] . " " . "<a class = 'date'>" . 
                            $row['postDate'] . "</a><br>" ;
                        }
                        else {
                            echo "<div class = 'name2'>" . $row['creatorName'] . " :</div> " . $row['content'] . " " . "<a class = 'date'>" . 
                            $row['postDate'] . "</a><br>" ;
                        }         
                    }
                    echo "</div></div>";
                }
                    
            ?>

            <div class="join-page-circle-1"></div>
            <div class="join-page-circle-2"></div>
            <div class="join-page-circle-3"></div>
            <div class="footer">
                <form action="includes/chat.inc.php" method="post">
                    <div class= "input-group">   
                        <input type="text" name="text" placeholder="Nachricht">
                        <button class="btn" type="submit" name="send">Abschicken</button>
                    </div>
                </form>
            </div>
        </body>
    </html>

