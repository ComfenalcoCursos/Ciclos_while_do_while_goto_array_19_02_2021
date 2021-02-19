<?php
$notaa = (float) 9; 
$notab = (float) 8; 
$notac = (float) 7;
$prom = (float) null;

$situacion1 = (string) "aprobado";
$situacion2 = (string) "desaprobado";

$prom = (float) (($notaa*3)+($notab*4)+($notac*2))/9;

if ($prom>10.5){
    echo($situacion1);
} else{
    echo($situacion2);
}

?>