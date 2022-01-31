<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>
    <body>
        <header>
            <ul>
                <li><a href="/?p=home">Home Page</a></li>
                <li><a href="/?p=bio">Bio</a></li>
                <li><a href="/?p=contact">Contact</a></li>
                <?php
                if (!isset($_SESSION['logged']) || $_SESSION['logged'] === false) {?>
                    <li><a href="/?p=login">Login</a></li><?php
                }
                else {?>
                <li><a href="/?p=sessadmin">Gestion</a></li>
                <li><a href="/?p=home&disL=1">Disconnect</a>
                    <?php
                }

                ?>


            </ul>
        </header>