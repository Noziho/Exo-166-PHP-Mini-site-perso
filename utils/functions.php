<?php

function getUserData (string $file) :void {
    $json = file_get_contents($file);
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


function dataIsset (string ...$inputNames):bool {
    foreach ($inputNames as $inputName) {
        if (!isset($_POST[$inputName])) {
            return false;
        }
    }
    return true;
}

function checkRange (string$value, int$min, int$max, $redirect):void {
    if (strlen($value) < $min || strlen($value) > $max) {
        header("Location: ". $redirect);
        exit();
    }

}

function getRandomName(string $regularName):string {
    $info = pathinfo($regularName);
    try {
        $bytes = random_bytes(15);
    }
    catch (Exception $e) {
        $bytes = openssl_random_pseudo_bytes(15);
    }
    return bin2hex($bytes). '.' .$info['extension'];
}
