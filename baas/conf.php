<?php
$serverinimi= "localhost";
$kasutajanimi="root";
$parool="";
$andmebaas="Jalgrattaeksami";
$yhendus=new mysqli($serverinimi, $kasutajanimi, $parool, $andmebaas);
$yhendus->set_charset('UTF8');
if(!$yhendus){
    die('Ei saa ühendust andmebaasiga');
}
?>