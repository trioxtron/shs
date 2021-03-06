<header>
    <div class="container mx-auto px-8 flex pt-1.5 justify-between">
        <a href="index2.php" alt="logo">
            <img src="images/logo3.png">
        </a>
        <ul class="flex items-center flex-nowrap space-x-6 text-md sm:text-lg">
            <?php
            if (isset($_SESSION['userId'])) {
            ?>
            <li><a href="includes/logout.inc.php" class="btn">Abmelden</a></li>
            <?php
            }
            ?>
            <?php foreach ($header_links as $key => $value): ?>
                <li class="flex-grow"><a href="<?=$key?>" class="font-bold hover:text-gray-400"><?=$value?></a></li>
            <?php endforeach ?>
        </ul>
    </div>
</header>