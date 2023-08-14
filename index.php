<?php
$nombre = readline("entrer un nombre svp!");
$fixe =  30;
if($nombre < $fixe){
    echo "Vous avez entré ".$nombre .'la valeurs rechercher est plus grande.';
}
if ($nombre > $fixe){
    echo "Vous avez entré " .$nombre .'la valeurs rechercher est plus petite.';
}
 if ($nombre == $fixe){
    echo "Félicitations vous avez trouvé le nombre mystère qui est : " .$fixe ;
}
?>