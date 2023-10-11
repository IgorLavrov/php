
<?php
require_once("conf.php");
if(!empty($_REQUEST["korras_id"])){
    // uuendada tabeliandmed-->slaalom=-1
    global $yhendus;
    $kask=$yhendus->prepare(
        "UPDATE jalgrattaeksam SET slaalom=1 WHERE id=?");
    $kask->bind_param("i", $_REQUEST["korras_id"]);
    $kask->execute();
    header("Location:ringtee.php");

}
if(!empty($_REQUEST["vigane_id"])){
    // uuendada tabeliandmed-->slaalom=-2 kui vajutakse ebaõnnestunud
    $kask=$yhendus->prepare(
        "UPDATE jalgrattaeksam SET slaalom=2 WHERE id=?");
    $kask->bind_param("i", $_REQUEST["vigane_id"]);
    $kask->execute();
    header("Location:ringtee.php");

}
//veebileht kuvab ainult need kellel teoriatulemus >-9 and slaalom =-1
$kask=$yhendus->prepare("SELECT id, eesnimi, perekonnanimi   FROM jalgrattaeksam WHERE teooriatulemus>=10 AND slaalom=-1 OR slaalom = 2");
$kask->bind_result($id, $eesnimi, $perekonnanimi);
$kask->execute();


?>
<!doctype html>
<html>
<head>
    <title>Slaalom</title>
</head>
<header>
    <?php

    include('navigation.php')

    ?>
</header>
<body>
<h1>Slaalom</h1>
<table>
    <?php
    while($kask->fetch()){
        echo " 
 <tr> 
 <td>$eesnimi</td> 
 <td>$perekonnanimi</td> 
 <td> 
 <a href='?korras_id=$id'>Korras</a>
 <a href='?vigane_id=$id'>Ebaõnnestunud</a> 
 </td> 
</tr> 
 ";
    }
    ?>
</table>
<?php
if(isSet($_REQUEST["korras_id"])||isSet($_REQUEST["vigane_id"])){

    header("Location:ringtee.php");
}
?>

</body>
</html>