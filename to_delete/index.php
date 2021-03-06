<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link href="index.css" rel="stylesheet">
        <link rel="icon" href="images/favicon.png" type="image/png">
        <title>Startseite</title>
    </head>

    <body class="flex flex-col text-base text-gray-50 h-screen">
        <header class="mb-auto">
            <div class="container mx-auto px-8 flex pt-1.5 justify-between">
                <a href="/" alt="logo">
                    <img src="images/logo3.png">
                </a>
                <ul class="flex items-center flex-nowrap space-x-6 text-md sm:text-lg">
                <li class="flex-1"><a href="discover.php" class="hover:text-gray-400">Kontakt</a></li>
                <li class="flex-1 whitespace-nowrap"><a href="about.php" class="hover:text-gray-400">Über uns</a></li>
                </ul>
            </div>
        </header>

        <main>
            <ul id="bubbles">
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="pt-5 container mx-auto px-8 flex flex-col-reverse xl:flex-row">
                <div class="flex-grow hidden xl:block self-end xl:w-1/3">
                    <img src="images/char.png" alt="human" class="relative top-3">
                </div>
                <div class="pt-12 sm:pt-0 pb-14 sm:pb-80 xl:pb-0">
                    <h1 class="font-bold text-6xl pb-5 xl:pt-32">Schüler helfen Schülern</h1>
                    <p class="text-2xl pb-4">
                        Melde dich an um zu helfen <br>
                        oder um Nachhilfe zu bekommen
                    </p>
                    <p>
                        <a href="start.php" class="text-sm bg-blue-600 p-2 px-4 rounded-lg button">Mach mit</a>
                    </p>
                </div>
            </div>
        </main>

        <footer>
            <div class="container mx-auto px-8 flex flex-row items-center font-bold text-md sm:text-xl h-16">
                <ul class="flex-1">
                    <?php
                    if (isset($_SESSION['userId'])) {
                    ?>
                    
                    <li><a href='start.php' class="hover:text-gray-400">Kurse</a></li>
                    <li><a href='userchats.php' class="hover:text-gray-400">Meine Chats</a></li>                       
                    
                    <?php
                    } else {
                    ?>
                    
                    <li><a href='join.php' class="hover:text-gray-400">Anmelden</a></li>
                        
                    <?php
                    }
                    ?>
                </ul>
                <ul class="flex space-x-6">
                    <li class="flex-0">
                        <a href="https://www.gsglebach.de/home.html" class="hover:text-gray-400">
                            Schule
                        </a>
                    </li>
                    <li class="flex-0">
                        <a href="imprint.php" class="hover:text-gray-400">
                            Impressum
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>