<?php
$title = "Espace admin";
require __DIR__ . './parts/header.php';
if ($_SESSION['logged'] !== true) {
    header("Location: /?p=home");
} ?>

    <h1 class="anime">Page admin</h1>

    <div class="container">
        <div class="basicContainer sessAdminContent">
            <h2>Gestion</h2>
            <?php
            $file = file_get_contents("../data/messagesHistory.txt");
            $tabFile = explode("\n",$file);
            foreach ($tabFile as $value) {?>

                <p class="messagesHistory"><?= $value ?></p>
                <hr><?php
            }
            ?>


        </div>
    </div>


<?php
require __DIR__ . './parts/footer.php';