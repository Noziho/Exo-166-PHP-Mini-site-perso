<?php
$title = "Contact";
require 'parts/header.php';?>

    <h1>Contact</h1>
    <form action="/?p=/form/formTreatment" method="post">
        <div>
            <label for="id-username">Pseudo</label>
            <input type="text" id="id-username" name="username" minlength="5" maxlength="25" required>
        </div>
        
        <div>
            <label for="id-mail">Adresse mail: </label>
            <input type="email" id="id-mail" name="user_mail" minlength="7" maxlength="120" required>
        </div>
        
        <div>
            <label for="id-message">Votre Message</label>
            <textarea name="user_message" id="id-message" cols="30" rows="10" minlength="25" maxlength="255" required></textarea>
        </div>

        <div>
            <input type="submit">
        </div>

    </form>
<?php
require 'parts/footer.php';