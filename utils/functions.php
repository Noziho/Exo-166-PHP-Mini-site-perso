<?php

function getUserData () :void {
    $json = file_get_contents('../data/user.json');
    $dataArray = json_decode($json, true);
    foreach ($dataArray as $key => $data) {
        if (is_array($data)) {
            foreach ($data as $arrayKey => $arrayData) {
                echo "<br>"."Experiences: ".($arrayKey)."<br>";
                foreach ($arrayData as $keyExperience => $valueKeyExperience) {
                    echo $keyExperience." => ".$valueKeyExperience."<br>";
                }
            }
        }
        else {
            ?>
            <div><?= $key .' => '. $data?></div><?php
        }

    }
}

function checkRange () {

}
