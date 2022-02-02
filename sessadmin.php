<?php
$title = "Espace admin";
require 'parts/header.php';
if ($_SESSION['logged'] !== true) {
    header("Location: /?p=home");
} ?>

    <h1 class="anime">Page admin</h1>

    <div class="container">
        <div class="basicContainer sessAdminContent">
            <h2>Gestion</h2>
            <?php
            $messagesHistoryJson = file_get_contents('../data/messagesHistory.json');
            $messagesHistory = json_decode($messagesHistoryJson, true);
            $messagesHistory = array_reverse($messagesHistory);

            if (isset($_GET['cm'], $_POST['delete'])) {
                unset($messagesHistory[(int)$_GET['cm']]);
                $messagesHistoryJsonModif = json_encode($messagesHistory);
                file_put_contents('../data/messagesHistory.json', $messagesHistoryJsonModif);
            }
            foreach ($messagesHistory as $key => $message) {?>
                <p class="messagesHistory">Pseudo: <?= $message['name'] ?></p>
                <p class="messagesHistory">Message: <?= $message['message'] ?></p>
                <form action="/?p=sessadmin&cm=<?= $key ?> " method="post">
                    <input class="sendButton" type="submit" name="delete" value="Delete">
                </form>
                <hr><?php
            }
            ?>


        </div>
    </div>


<?php
require 'parts/footer.php';