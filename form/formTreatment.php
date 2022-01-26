<?php











$jsonMessage = file_put_contents("../data/last_message.json", $_POST['user_message']);
json_encode($jsonMessage);

header('Location: /?p=admin');