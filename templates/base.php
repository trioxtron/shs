<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link href="styles/<?=$styles?>.css" rel="stylesheet">
        <link rel="icon" href="images/favicon.png" type="image/png">
        <title><?=$title?></title>
    </head>

    <body class="flex flex-col text-base text-gray-50 h-screen">
        <?=load_template('partials/header.php', array("header_links" => $header_links))?>
        <main class="mb-auto">
            <?=$content?>
        </main>
        <?=load_template('partials/footer.php', array("footer_links" => $footer_links, "footer_init_links" => $footer_init_links))?>
    </body>
</html>