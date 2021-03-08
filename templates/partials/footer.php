<footer>
    <div class="container mx-auto px-8 flex flex-row justify-between items-center font-bold text-md sm:text-xl h-16">
        <ul class="flex space-x-6">
            <?php
            if (isset($_SESSION['userId'])) {
            ?>
            
            <li><a href='start.php' class="hover:text-gray-400">Kurse</a></li>
            <li><a href='forum.php' class="hover:text-gray-400">Forum</a></li>                       
            
            <?php
            } else {
            ?>

            <?php foreach ($footer_init_links as $key => $value): ?>
                <li><a href="<?=$key?>" class="hover:text-gray-400"><?=$value?></a></li>
            <?php endforeach ?>

            <?php
            }
            ?>
        </ul>
        <div class="w-0.5 h-6 bg-white sm:hidden"></div>
        <ul class="flex space-x-6">
            <?php foreach ($footer_links as $key => $value): ?>
                <li><a href="<?=$key?>" class="hover:text-gray-400"><?=$value?></a></li>
            <?php endforeach ?>
        </ul>
    </div>
</footer>