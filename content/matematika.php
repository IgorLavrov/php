<?php
$color = "red";
echo "<h1>Matemaatika tehed</h1>";
$number1=50;
$number2=100;

$number3=$number1+$number2;
//vastused´-punase värviga ja lisada täpploend
echo " Kui me liidame 2 arvu kokku <font color='red'>$number3</font>";
echo "<br>";
echo "Kui me jagada arv1-ga ar,siis tuleb <span>".($number2/$number1). "</span>" ;
echo "<br>";
echo"Arv1 ruudus on ".pow($number1,2);
echo "<br>";
echo "arv2-arv1 * 2=";
echo($number2-$number1*2);