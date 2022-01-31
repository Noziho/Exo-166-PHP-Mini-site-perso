<?php
$title = "Connexion";
require __DIR__ .'./parts/header.php';
if (isset($_SESSION['logged']) === true) {
    header("Location: /?p=home");
}
    $errorMessage = [
        "Error: Le mot de passe ou l'identifiant est incorrect",
    ];
    if (isset($_GET['e'])) {
    $index = (int)$_GET['e'];
    $message = $errorMessage[$index];?>
    <div class="error-message <?= strpos($message, "Error: ") === 0 ? 'error' : 'success' ?>"><?= $message ?></div>
<?php

}?>
    <div class="containerLogin">
        <div class="basicContainer">
            <form action="/?p=/form/formLoginTreatment" method="post">
                <div>
                    <label for="id-login">Login: </label>
                    <input type="text" id="id-login" name="user_login" minlength="5" maxlength="25" required>
                </div>

                <div>
                    <label for="id-password">Password: </label>
                    <input type="password" id="id-password" name="user_password">
                </div>

                <div>
                    <input class="sendButton" type="submit" value="Connexion">
                </div>

            </form>
        </div>
    </div>




















<?php
require __DIR__ .'./parts/footer.php';