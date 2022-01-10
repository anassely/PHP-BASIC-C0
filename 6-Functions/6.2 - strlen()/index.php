<?php

function mijnNaamIsGroot(){
    $voorNaam = "anass";
    $achterNaam = "el yahiaoui";
    $geheleNaam = $voorNaam . " " . $achterNaam;
    $geheleNaam = strtoupper("Mijn naam is $geheleNaam");
    echo $geheleNaam;
    
}
mijnNaamIsGroot();