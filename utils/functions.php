<?php

function getUserData () :void {
    $json = file_get_contents('../data/user.json');
    $dataArray = json_decode($json, true);
    foreach ($dataArray as $key => $data) {
        if (is_array($data)) {
            foreach ($data as $arrayKey => $arrayData) {
                echo "<br>"."Experiences: "."n°".($arrayKey+1).":"."<br>";
                foreach ($arrayData as $keyExperience => $valueKeyExperience) {
                    echo $keyExperience." : ".$valueKeyExperience."<br>";
                }
            }
        }
        else {
            ?>
            <div><?= $key .': '. $data?></div><?php
        }

    }
}

function getSecuredStringData (string $inputName):string {
    $data = (string)$_POST[$inputName] ?? '';
    return strip_tags(trim($data));
}

function dataIsset (string ...$inputNames):bool {
    foreach ($inputNames as $inputName) {
        if (!isset($_POST[$inputName])) {
            return false;
        }
    }
    return true;
}

function checkRange (string$inputName, int$min, int$max, $redirect):void {
    if (strlen($_POST[$inputName]) < $min || strlen($_POST[$inputName] > $max)) {
        header("Location: ". $redirect);
        exit();
    }

}