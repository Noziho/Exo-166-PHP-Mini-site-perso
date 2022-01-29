<?php
require '../utils/functions.php';
require '../id.php';

if (!dataIsset('user_login', 'user_password')){
    header("Location: /?p=login&e=0");
}

$login = getSecuredStringData('user_login');
$password = getSecuredStringData('user_password');

if ($login !== $username || $password !== $passwd ) {
    $_SESSION['logged'] = false;
    header("Location: /?p=login&e=0");
}
else {
    $_SESSION['logged'] = true;
}

if ($_SESSION['logged'] === true) {
    header("Location: /?p=home&login=1");
}