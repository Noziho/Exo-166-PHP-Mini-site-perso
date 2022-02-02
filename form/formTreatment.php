<?php
require './../utils/functions.php';

if (!dataIsset('username', 'user_mail', 'user_message')) {
    header("Location: /?p=contact&f=0");
    exit();
}

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$userMail = filter_var($_POST['user_mail'], FILTER_SANITIZE_EMAIL);
$userMessage = filter_var($_POST['user_message'], FILTER_SANITIZE_STRING);

$userMail = filter_var($userMail, FILTER_VALIDATE_EMAIL);


checkRange($username, 5, 25, '/?p=contact&f=1');
checkRange($userMail, 7, 120, '/?p=contact&f=2');
checkRange($userMessage, 25, 255, '/?p=contact&f=3');
if (!$userMail) {
    header("Location: /?p=contact&f=4");
    exit();
}


$jsonMessage = file_put_contents("../data/last_message.json", $_POST['user_message']);
json_encode($jsonMessage);

$messagesHistory = file_put_contents("../data/messagesHistory.txt", "\n"."\n".$_POST['user_message'], FILE_APPEND);


if (isset($_FILES['userFile'])) {

    if ($_FILES['userFile']['error'] === 0) {
        $allowedExtension = ['image/jpeg', 'image/png', 'image/jpg'];

        if (in_array($_FILES['userFile']['type'], $allowedExtension)) {

            $max_size = 2 * 1024 * 1024;
            if ((int)$_FILES['userFile']['size'] <= $max_size) {

                $tmp_name = $_FILES['userFile']['tmp_name'];
                $name = getRandomName($_FILES['userFile']['name']);

                if (!is_dir('uploads')) {
                    mkdir('uploads', '0755');
                }

                move_uploaded_file($tmp_name, "uploads/" . $name);

            }
            else {
                header("Location: /?p=contact&f=5");
            }

        }
        else {
            header("Location: /?p=contact&f=6");
        }
    }
    else {
        header("Location: /?p=contact&f=7");
    }
}


$to = "noah.decroix3@gmail.com";
$headers = [
    'Reply-To' => $_POST['user_mail'],
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
 
        <div>
            Pseudo: ' . $username . '<br>
            Mail: '.$userMail.'<br>
            Message: ' . $userMessage . '<br>
        </div>
    </body>
';
mail($to, 'Formulaire de contact minisite', $message, $headers);
header("Location: /?p=lastMessage");





