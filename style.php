<?php
$fixe = rand(0,10);
$tentative = 0;
while(true){
    $nombre = readline("Entrez un nombre : ");
    $tentative++;
    if($nombre< $fixe){
        echo "vous avez entré $nombre. la valeur recherchée est plus grande.";
    }elseif ($nombre > $fixe){
         echo "vous avez entré $nombre. la valeur recherchée est plus petite.";
    }else {
        echo "Félicitations vous avez entré le nombre mystère qui est : $fixe";
        break;
    }
}

?>