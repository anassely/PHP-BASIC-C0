<?php
function geefTienProcent(){
    $koopPrijs = 75;
    $korting = 10;
    $kortingEuro = ($koopPrijs / 100) * $korting;
    return  $koopPrijs - $kortingEuro;
    
}
echo geefTienProcent();