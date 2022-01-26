<?php
require '../utils/functions.php';

if (!dataIsset('username', 'user_mail', 'user_message')) {
    header("Location: /?p=contact&f=0");
    exit();
}

$username = getSecuredStringData('username');
$userMail = getSecuredStringData('user_mail');
$userMessage = getSecuredStringData('user_message');

$userMail = filter_var($userMail, FILTER_VALIDATE_EMAIL);


checkRange('username',5, 25,  '/?p=contact&f=1');
checkRange('user_mail',7, 120,  '/?p=contact&f=2');
checkRange('user_message',25, 255,  '/?p=contact&f=3');
if (!$userMail) {
    header("Location: /?p=contact&f=4");
    exit();
}

header("Location: /?p=contact&f=5");







$jsonMessage = file_put_contents("../data/last_message.json", $_POST['user_message']);
json_encode($jsonMessage);

header('Location: /?p=admin');