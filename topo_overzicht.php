<?php

echo "Hoeveel landen ga je toevoegen?" . "\n";
$a = readline("");
$ary = array();

for($i = 0; $i < $a; $i++){
    echo "Welk land wil je toevoegen?" . "\n";
    $land = readline("");
    echo "Wat is de hoofdstad van $land?" . "\n";
    $stad = readline("");

    $ary[$land] = $stad;
}

echo "De volgende landen en steden zitten in de database:" . "\n";

foreach($ary as $land => $stad){
    echo $land . ", " . $stad . "\n";
}