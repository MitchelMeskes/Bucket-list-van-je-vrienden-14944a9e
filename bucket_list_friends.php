<?php

echo "Hoeveel vrienden zal ik vragen om hun droom?".PHP_EOL;
    $hoeveel = readline();
    if (is_numeric($hoeveel));
        else {
        echo "Alleen nummer's!";
         exit;
    }

$alles = array();


for ($i = 1;$i <= $hoeveel; $i++){
    echo "Wat is je naam:\n";
    $naam = readline();
    echo "Wat is je droom?:\n";
    $droom = readline();
    $alles[$naam] = $droom;
}
echo "De dromen van jouw vrienden zijn:\n";

foreach ($alles as $naam => $droom){
    echo "De droom van $naam is: $droom\n" ;
}