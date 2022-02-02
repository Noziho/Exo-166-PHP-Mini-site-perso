<?php
require '../utils/functions.php';
require '../id.php';

if (!dataIsset('user_login', 'user_password')){
    header("Location: /?p=login&e=0");
}

$login = filter_var($_POST['user_login'],FILTER_SANITIZE_STRING);
$password = $_POST['user_password'];

if ($login !== $username || $password !== $passwd ) {
    header("Location: /?p=login&e=0");
}
else {
    $_SESSION['logged'] = true;
}

if ($_SESSION['logged'] === true) {
    header("Location: /?p=home&login=1");
}