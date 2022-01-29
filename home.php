<?php
$title = 'Accueil';
require 'parts/header.php';
require 'id.php';
if (isset($_GET['login'])) { ?>
        <div class="error-message success">Bienvenue <?= $username ?></div><?php
}
if (isset($_GET ['disL'])) {
    session_destroy();
    ?>
    <div class="error-message error">Vous avez été déconnecté.</div><?php
}


?>
    <h1 class="anime">Bienvenue sur mon site !</h1>

    <div class="container">
        <div class="basicContainer">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam aspernatur
            beatae, dolorem ea earum,
            fugit mollitia nisi officiis porro quasi quo suscipit vero! Ab ea hic labore magni quisquam?
        </div>
    </div>


<?php
require 'parts/footer.php';