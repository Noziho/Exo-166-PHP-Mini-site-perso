<?php
$title = "Espace admin";
require __DIR__ . './parts/header.php';
if ($_SESSION['logged'] !== true) {
    header("Location: /?p=home");
} ?>

    <h1 class="anime">Page admin</h1>

    <div class="container">
        <div class="basicContainer">
            <h2>Gestion</h2>
            <?php
            $file = fopen("../data/messagesHistory.txt", "r+");
            while ($line = stream_get_line($file, 0)) {?>
                <p class="messagesHistory"><?= $line."\n" ?></p><?php
            }
            fclose($file);
            ?>


        </div>
    </div>


<?php
require __DIR__ . './parts/footer.php';