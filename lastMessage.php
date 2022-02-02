<?php
$title = "Last send message";
require 'parts/header.php';
$messagesHistoryJson = file_get_contents('../data/messagesHistory.json');
$messagesHistory = json_decode($messagesHistoryJson, true);
$lastMessage = $messagesHistory[count($messagesHistory) -1]?>
<div class="container">
    <div class="basicContainer autoWidth">
        <h3>Le dernier message envoyer est: </h3>
        <p id="lastMessage"><?= $lastMessage['message'] ?></p>
    </div>
</div>
<?php
require 'parts/footer.php';