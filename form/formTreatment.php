<?php

$jsonMessage = file_put_contents("../data/last_message.json", $_POST);
json_encode($jsonMessage);

header('Location: admin.php');