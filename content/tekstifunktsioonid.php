<link rel="stylesheet" type="text/css" href="style/lego.css">
<div>
<?php
function clearVarsExcept($url, $varname) {
    return "?$varname=".$_REQUEST[$varname];
}

$tekst="Tore et on september";

echo $tekst;
echo"<br>";
echo strtolower($tekst);
echo"<br>";
echo strtoupper($tekst);
echo"<br>";
echo ucwords(strtolower($tekst));
echo"<br>";
echo strlen($tekst);			//34
echo '<br>';
echo str_word_count($tekst);
echo"<br>";

echo substr($tekst, 3, 5);		//thin
echo '<br>';
echo substr($tekst, 0, 4);	//thinking men
echo '<br>';
echo substr($tekst, -8, 7);

echo "<br>";
 echo"simene tühiki asukoht tekstis".strpos($tekst,"");
echo "<br>";
$otsitav="on";
echo strpos($tekst,$otsitav,0);
echo "<br>";
echo substr($tekst,strpos($tekst," "),strlen($tekst)-strpos($tekst," "));
?>

<hr>
<h2>Mõistatus. Eesti linn</h2>
<h2>väike sõnumiga</h2>


<?php
$a="a";
$linn="tallin";
echo"<li> Linnanimi pikkus on ".strlen($linn)." tähte</li>";
echo"<li> Esimene täht on ".substr($linn,0,1)."</li>";
echo"<li> Sõna lõpetab on ".substr($linn,4,6)."</li>";
echo"<li> See on ".str_word_count($linn)." sõna</li>";
echo"<li> Kui esimene täht asub  0 kohas  siis täht  A asub   ".strpos($linn,$a,0)." koht</li>";

?>
<br>
<form name="kontroll" action="<?=clearVarsExcept(basename($_SERVER['REQUEST_URI']),"leht")?>" method='post'>
<label for="n1"> Sinu Sõna</label>
<input type="string" name="n1" >
<input type="submit" value="OK">
</form>
<?php
if(isset($_REQUEST["n1"])) {
if($_REQUEST["n1"]==$linn){
    echo "Õige!";
    echo "<body style='background-color: lightgreen'>";
}else{
    echo "vale!";
    echo "<body style='background-color: lightcoral'>";
}
}
?>
<br>
</div>
