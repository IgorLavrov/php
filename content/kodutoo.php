<?php

function VarXcept($url, $varname)
{
    return "?$varname=".$_REQUEST[$varname];
}
?>
<link rel="stylesheet" type="text/css" href="style/lego.css">
<body>
<div>

<h3>Aja loomine</h3>
<?php
echo time();
?>
<h4>Kuva kuupäev ja kellaaeg formaadis(20.03.2023 17:31)</h4>
<?php
date_default_timezone_set('Europe/Tallinn');
echo date('d.m.Y G:i');
?>
<h3>Kuupäev</h3>
<?php
echo date('d.m.Y G:i');
echo'<br>';
echo date('d.F.Y');
?>
<h3>Kuupäev eesti keeles</h3>
<?php
//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta; //22.veebruar2013
?>
<h4>Leia kui vana on või kui vanaks saab kasutaja sellel aastal<h4>
<label>Sunnipaev aastat</label>
<form method="post" action="<?=VarXcept(basename($_SERVER['REQUEST_URI']), "leht")?>">
<input type="number" name="vanus">
<input type="submit">
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_POST["vanus"])) {
        $aasta = date('Y');
        $age = $_POST["vanus"];
        $vad=$aasta-$age;
        echo'<br>';
        echo 'sinu vanus on  ';
        echo $vad;
    }
}
?>
</form>
<h4>Väljasta vastavalt aastaajale pilt (kevad, suvi, sugis, talv)</h4>
 <form method="post" action="<?=VarXcept(basename($_SERVER['REQUEST_URI']), "leht")?>">
<input type="text" name="pilt">
<input type="submit">
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
if (isset($_POST['pilt'])) {
$pilt = $_POST['pilt'];
$pildi_aadress = 'images/'.$pilt.'.png';
echo "<img src='$pildi_aadress' width='500' height='600'><br>";
}}
?>
</form>
<h4>Mitu päeva on käesoleva kooliaasta lõpuni? </h4>
<?php

$lastday = new DateTimeImmutable('2023-06-13');
$datetime2 =new DateTime("now");
//$interval = date_diff( $lastday,$datetime2 );
$interval = $datetime2->diff($lastday);
echo 'kooliaasta lõpuni on jäänud ';
//echo $interval->format('%R%a days');
echo $interval->format("%a"), "\n";
echo ' paev';
?>
</div>
</body>