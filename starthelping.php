
<?php
    session_start();
?>

<?php
  if (isset($_SESSION['sendVer'])) {
    /* mannually check if student is "good" then send code*/
    /* Disclaimer: school, grades etc.   Send code(id) */
    echo('<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        send verification
    </body>
    </html>');
  }
  else {
    /* Style input form for cod (userID) */  
    echo('<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        Verfikation gesendet
    </body>
    </html>');
  }