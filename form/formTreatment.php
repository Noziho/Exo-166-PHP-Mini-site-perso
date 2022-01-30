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

$jsonMessage = file_put_contents("../data/last_message.json", $_POST['user_message']);
json_encode($jsonMessage);

$to = $_POST['user_mail'];
$headers = [
    'Reply-To' => 'noah.decroix3@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion(),
    'Mime-version' => '1.0',
    'Content-type' => 'text/html; charset=utf-8',
];
$message = '
    <html lang="fr">
    <head>
        <title>Retour formulaire de contact</title>
    </head>
    <body>
    <h1>Merci de nous avoir contacté, nous vous recontacterons bientôt</h1>
        <div>
            Pseudo: '.$username.'<br>
            Message: '.$userMessage.'<br>
        </div>
    </body>
';
mail($to, 'Formulaire de contact retour', $message, $headers);
header("Location: /?p=lastMessage");





