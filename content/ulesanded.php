<?php

function VarXcept($url, $varname)
{
    return "?$varname=".$_REQUEST[$varname];

}

?>
<link rel="stylesheet" type="text/css" href="style/lego.css">
<div>
<h2>Ülesanne 1</h2>
<?php
//Iga ülesanne hakkab kommentaariga, kus on kirjas ülesande number, sinu nimi ja kuupäev
// Igor Lavrov 11/09/2023

//Programm väljastab kolme muutuja (nimi, sünniaasta, tähtkuju) väärtused ühe koodireaga. Kusjuures kõik on väljastades eraldi real. Vastus //täislausega.
$name="Igor";
$year="1990";
$constellation="aquarius";
echo $name." ".$year." ".$constellation.'<br><br>';

?>
<?php
    $str=" “It’s My Life”";
    $Name=" – Dr. Alban";
    $ear='(|' ;
    $ear1='(|';

    $head="(- . -)";

    $neck="o-";
    $leg="('')";
    $leg1="('')";
    


echo '<div class="nowrap-text">';
echo $str.' '.$Name.'<br><br>';

    echo '&nbsp&nbsp&nbsp'. $ear. ' '.$ear1.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br>';
    echo '&nbsp&nbsp'. $head.'<br>' .'&nbsp&nbsp&nbsp&nbsp';
    echo $neck.$leg.' '.$leg1.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>';
    

?>
</div>
<br>
<h2>Ülesanne 2</h2>
<?php
//Iga ülesanne hakkab kommentaariga, kus on kirjas ülesande number, sinu nimi ja kuupäev
// Igor Lavrov 11/09/2023

//Loo kaks täisarvulist muutujat, mis omavahel liidetakse, lahutatakse, korrutatakse, jagatakse ja leitakse jääk. Kusjuures vastuse kuvamisel //näidatakse ka tehet ja kuvatakse eraldi ridadel. 

$number=12;
$number2=24;
$sum= $number+$number2;
$minus= $number2-$number;
$multiply= $number2*$number;
$div=$number2/$number;
echo '<div style="color: green">';
printf('liitmine: %d', $sum);
echo '<br>';
printf('lahutamine: %d', $minus);
echo '<br>';
printf('korrutamine: %d', $multiply);
echo '<br>';
printf('jagamine: %f', $div);
echo '</div>';

?>
<br>
<?php
echo "Teisenda millimeetrid (mm) sentimeetriteks (cm) ja meetriteks (m)";
?>
<br>
<br>
<form name="convert">
    <label for="sissesta andmeid"></label>
    <input type="number" name="mm" id="Meters" value="">
    <br>
    <input type="button" value="esitada" onclick="ConvertMM()">
</form>
<div id="result"></div>
<h4>Täisnurkse kolmnurga ümbermõõt ja pindala</h4>
<h6>Üks kolmnurk pool-Teine kolmnurk pool-Kaatet</h6>
<form name="pindala">
    <label for="pindala"></label>
     <input type="number" name="a" id="Side" value="Üks Pool">
     <input type="number" name="b" id="Side2" value="Teine Pool">
     <input type="number" name="b" id="kaatet" value="Kaatet">
     <input type="button" value="Esitada" onclick="Pindala()">
</form>
<div id="vastus"></div>
<br>
<script>
    function ConvertMM(){
        var mm=parseFloat(document.getElementById('Meters').value);
        var cm=mm/10; 
        var m=mm/1000; 

        var results=document.getElementById('result');
        results.innerHTML='Tulemused: <br><br>';

        results.innerHTML+= mm+ ' millimeetrit on ' +cm+ ' sentimeetrit<br> ';
        results.innerHTML+=mm+ ' millimeetrit on '  +m+  ' meetrit ';

    }
    function Pindala(){
        
        var a=parseFloat(document.getElementById('Side').value);
        var b=parseFloat(document.getElementById('Side2').value);
        var c=parseFloat(document.getElementById('kaatet').value);
        var umbermoot=a+b+c;
        var pindala=(a+b)/2;

       
        var results=document.getElementById('vastus'); 

       results.innerHTML='Tulemused:<br> ';

       results.innerHTML+= ' Täisnurkse kolmnurga ümbermõõt '+ umbermoot +' meetrit<br>';
       results.innerHTML+= ' Täisnurkse kolmnurga pindala '+ pindala +' meetrit';


    }
</script>
<h2>Ülesanne 9</h2>
<p>Pane oma Nimi </p>
<form method="post" action="<?=VarXcept(basename($_SERVER['REQUEST_URI']), "leht")?>">
    <input type="text" name="nimi">
    <input type="submit" value="Tervita"></form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    // Saame kasutaja sisestatud nime vormist
    if (isset($_POST["nimi"])) {
        $Nimi = $_POST["nimi"];
        // Teeme nime esimese tähe suureks ja ülejäänud tähed väikesteks
        $uusNimi = ucfirst(strtolower($Nimi));
        
        echo "Tere, " . $uusNimi . "!";
    }


}
?>
<p>Ülesandeks on etteantud teksti iga tähe järgi lisada punkt.</p>

<form method="post" action="<?=VarXcept(basename($_SERVER['REQUEST_URI']), "leht")?>">
    <input type="text" name="sona">
    <input type="submit">
    
</form>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    if (isset($_POST['sona']))
    {
        $Name=$_POST['sona'];
        $name=strtoupper(implode('.',str_split( $Name)));
        echo $name;
    }
}
?>
<p>Kasutaja ropud sõnad asendatakse tärnidega.</p>

<form method="post" action="<?=VarXcept(basename($_SERVER['REQUEST_URI']), "leht")?>">
    <input type="text" name="N">
    <input type="submit">
    
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{ if(isset($_POST['N'])){
    $str1=$_POST['N'];
    $massivsona=['suka','noob','idiot','baran'];
    $uusStr=str_replace($massivsona,'***',$str1);
    echo $uusStr;
}
}
?>
<p>eesnime ja perenime põhjal luuakse talle email lõpuga @hkhk.edu.ee</p>
<form method="post" action="<?=VarXcept(basename($_SERVER['REQUEST_URI']), "leht")?>">
<input type ="text" name="eesnimi" value="eesnimi">
<input type="text" name="perekonanimi" value="perekonanimi">
<input type="submit">
</form>
<br>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['eesnimi']) && isset($_POST['perekonanimi'])){
        $str2=$_POST['eesnimi'];
        $str3=$_POST['perekonanimi'];
        $str4=["ä" => "a","Ä"=>"a","Ö"=>"o", "ö" => "o","Ü"=>"y","Õ"=>"o", "ü" => "y", "õ" => "o"];
        $str6=strtolower($str2);
        $str7=strtolower($str3);
        $str5=strtr($str6,$str4).strtr($str7,$str4).'@hkhk.edu.ee';
        echo $str5;
    }
}
?>







