<?php

// exercice 0

$first = 5;

//exercice 1
$word = "c'est ";
$word2 = "vie.";
$word3 = "Simplon";
$word4 = "la";

echo $word3.$word.$word4.$word2;

// exercice 2
$varibables1=12;
$varibables2=4;

echo $varibables1/$varibables2 ;

// exercice 3
$var="clement";
$var1="extrapolation";
echo (strlen($var)+strlen($var1));

// exercice 4
$maÃ®trise_du_code = 1000;

if ( $maÃ®trise_du_code>= 1000) {
echo "je maîtrise tellement le code maintenant" ;};

//exercice 5
$chiffre_fetiche_sandrine = 7;
$chiffre_fetiche_xavier = 130;
$chiffre_fetiche_andre = 8;

$concater;
$concater=$chiffre_fetiche_sandrine;
$chiffre_fetiche_sandrine=$chiffre_fetiche_xavier;
$chiffre_fetiche_xavier=$concater;
echo $chiffre_fetiche_sandrine;

//exercice 6
$compte =-100;
if ($compte > 0) {
    echo "bravo, vous êtes un bon gestionnaire";
} else {
    echo "Vous faites vraiment n'importe quoi avec votre argent";
}
//Exercice 7)
$vent = 23;
$houle = 10;
$cadence_vague = 3;
if($vent>30){
    if($houle<=20){
        if($cadence_vague<=10){
            echo "on peut aller surfer";
        }
    }
}
if ($vent<30){
    if($houle<30){
        if($cadence_vague<8){
            echo"on peut aller surfer";
        }
    }
}
else {echo "les conditions ne sont pas bonnes pour aller surfer";}

// exercice 8
$nombre_1 = 88;
$nombre_2 = 7;
$nombre_3 = 23;
$nombre_4 = 5;
$nombre_5 = 45;
$nombre_6 = 12;
$multiple =2;

function est_multiple($nombre,$nombre2){
    if($nombre % $nombre2 == 0 )
    return $nombre*-1;
    else
    return $nombre;
}
$result = est_multiple($nombre_1) +est_multiple($nombre_2) +est_multiple($nombre_3) +
est_multiple($nombre_4) +est_multiple($nombre_5) +est_multiple($nombre_6);

echo $result;
?>