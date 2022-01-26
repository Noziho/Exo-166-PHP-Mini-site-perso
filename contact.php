<?php
$title = "Contact";
require 'parts/header.php';
if (isset($_POST['submit'])) {

}?>
    <h1>Contact</h1>
    <form action="/?p=/form/formTreatment" method="post">
        <div>
            <label for="id-username">Pseudo</label>
            <input type="text" id="id-username" name="username">
        </div>
        
        <div>
            <label for="id-mail">Adresse mail: </label>
            <input type="email" id="id-mail" name="user_mail">
        </div>
        
        <div>
            <label for="id-message">Votre Message</label>
            <textarea name="user_message" id="id-message" cols="30" rows="10"></textarea>
        </div>

        <div>
            <input type="submit">
        </div>

    </form>
<?php
require 'parts/footer.php';