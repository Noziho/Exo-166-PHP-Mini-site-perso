<?php
$title = "Admin space";
require 'parts/header.php';
$file = fopen('../data/last_message.json', 'rb');
echo "Le dernier message envoyer est: <br>";
echo fgets($file);

fclose($file);

require 'parts/footer.php';