<?php
$title = "Contact";
require 'parts/header.php';
$messages = [
    'Error: Global error !',
    'Error: La longeur du pseudo doit-être comprise entre 5 et 25 caractères.',
    "Error: La longueur de l'adresse mail doit-être comprise entre 7 et 120 caractères.",
    "Error: La longueur du message doit-être comprise entre 25 et 255 caractères",
    "Error: L'adresse mail doit contenir un format de type mail@exemple.com",
    "Success: Le formulaire à bien été envoyer.",
];
if (isset($_GET['f'])) {
    $index = (int)$_GET['f'];
    $message = $messages[$index];?>
        <div class="error-message <?= strpos($message, "Error: ") === 0 ? 'error' : 'success' ?>"><?= $message ?></div>
        <?php

}?>

    <h1>Contact</h1>
<div class="container">
    <div class="basicContainer">
        <form action="/?p=/form/formTreatment" method="post">
            <div>
                <label for="id-username">Pseudo: </label>
                <input type="text" id="id-username" name="username" minlength="5" maxlength="25" required>
            </div>

            <div>
                <label for="id-mail">Adresse mail: </label>
                <input type="email" id="id-mail" name="user_mail" minlength="7" maxlength="120" required>
            </div>

            <div>
                <label for="id-message">Votre Message: </label>
                <textarea name="user_message" id="id-message"  cols="30" rows="10" minlength="25" maxlength="255" required></textarea>
            </div>

            <div>
                <input class="sendButton" type="submit">
            </div>

        </form>
    </div>
</div>

<?php
require 'parts/footer.php';