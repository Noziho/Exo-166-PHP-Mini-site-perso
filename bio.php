<?php
$title = "Bio";
require 'utils/functions.php';
require 'parts/header.php';?>
<h1 class="anime">Bio</h1>
<div class="container">

    <div class="basicContainer">
        <h2>Informations: </h2><?= getUserData() ?>
    </div>

</div>
<?php
require 'parts/footer.php';
