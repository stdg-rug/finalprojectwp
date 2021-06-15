<?php
//show error messages of code
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<div class="topcontainer">';

$json = file_get_contents("../data/data.json");
$data = json_decode($json);
foreach ($data as $item) {
    if ($item->{'question'} == 'Je hebt het goed geraden!') {
        header('Location: ../youwon.php');
    } else {
        if ($item->{'playerId'} == 1) {
            $string = '
            <div class="chatcontainer">
                <img src="media/avatar1.png" alt="Avatar" style="width:100%;">
                <p>'.$item->{'question'}.'</p>
            </div>
            ';
        } else {
            $string = '
            <div class="chatcontainer darker">
                <img src="media/avatar2.png" alt="Avatar" class="right" style="width:100%;">
                <p>'.$item->{'question'}.'</p>
            </div>
            ';
        }
        echo $string;
    }
}

echo '</div>';






