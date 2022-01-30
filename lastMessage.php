<?php
$title = "Last send message";
require 'parts/header.php';
$file = fopen('../data/last_message.json', 'rb');?>
<div class="container">
    <div class="basicContainer autoWidth">
        <h3>Le dernier message envoyer est: </h3>
        <p id="lastMessage"><?=fgets($file)?></p>
    </div>
</div>
<?php

fclose($file);

require 'parts/footer.php';