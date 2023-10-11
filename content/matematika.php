<link  rel="stylesheet" type="text/css" href="lego.css"/>
<div>
<?php
function clearVarsExcept($url, $varname) {
    return "?$varname=".$_REQUEST[$varname];
}

$color = "red";

echo "<h1>Matemaatika tehed</h1>";
$number1=50;
$number2=100;

$number3=$number1+$number2;
//vastused´-punase värviga ja lisada täpploend
echo " * Kui me liidame 2 arvu kokku <font color='red'>$number3</font>";
echo "<br>";
echo " * Kui me jagada arv1-ga ar,siis tuleb <span>".($number2/$number1). "</span>" ;
echo "<br>";
echo" * Arv1 ruudus on ".pow($number1,2);
echo "<br>";
echo " * arv2-arv1 * 2=";
echo($number2-$number1*2);
?>
    <form name="kontroll" action="<?=clearVarsExcept(basename($_SERVER['REQUEST_URI']),"leht")?>" method='post'>
    <label for="n1">Arv 1</label>
    <input type="number" name="n1" value="0">
    <br>
    <label for="n2">Arv 1</label>
    <input type="number" name="n2" value="0">
    <input type="submit" value="OK">

</form>
<?php
if(isset($_REQUEST["n1"])) {
if($_REQUEST["n1"]==$number1){
    if($_REQUEST["n2"]==$number2){
         echo "Õige!";
        echo "<body style='background-color: lightgreen'>";
}
   else if($_REQUEST["n1"]!==$number1){
       echo "vale!";
   echo"<body style='background-color: lawngreen'>";
}else{
    echo "vale!";
    echo "<body style='background-color: white'>";
}

}else{
    echo "vale!";
    echo "<body style='background-color: lightcoral'>";
}
}
?>
</div>