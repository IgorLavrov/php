<?php

function VarXcept($url, $varname)
{
    return "?$varname=".$_REQUEST[$varname];
}


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
div { margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;}
body {background-color: powderblue;}
h1   {color: blue;}
p    {color: red;}
</style>
<div>
<h3>Esimene Ülesande</h3>
<h5> Massiv</h5>

<?php
$tudrukud=["Irina","Lisa","Margarita","Anna","Lera","Kristina","Arina","Kaja"];
var_dump($tudrukud);
echo '<h5>Sorteeritud massiiv</h5>';
sort($tudrukud);
foreach($tudrukud as $tudruk){
echo $tudruk.'<br>';}
?>
<form method="post" action="<?=VarXcept(basename($_SERVER['REQUEST_URI']), "leht")?>">
<h3> Sissetada kolm esimene täht</h3>
<input type="text" name="nimi">
<input type="submit">
<?php
$tudrukud=["Irina","Lisa","Margarita","Anna","Lera","Kristina","Arina","Kaja"];

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_POST["nimi"])) {
        $nimi = $_POST["nimi"];
        strtolower($nimi);
        foreach($tudrukud as $tudruk){
        
        
         if(substr(strtolower($tudruk), 0, 3)=== strtolower($nimi))
         {  
             echo'<br>';
             echo "leian".'<br>';
             echo $nimi.'=> '.$tudruk.'<br>';

         }
         }}
         else{
             echo '<br>'.'sisesta oma kol täht'.'<br>';
         }}
?>
<h3>Väljasta üks suvaline nimi (suvaline arv genereeritakse vastavalt massiivis olevate elementide arvule)</h3>
    <form method="post">    
        <input type="submit" name="button1"
                value="Segada"/>
    
    </form>
     
<?php
$tudrukud=["Irina","Lisa","Margarita","Anna","Lera","Kristina","Arina","Kaja"];
      
        if(isset($_POST['button1'])) {
            $randomnumber=rand(0, count($tudrukud));
            echo 'Juhuslik nimi<br>';
            echo $tudrukud[$randomnumber].'<br>';
            shuffle($tudrukud);
            echo  'Praegu viimane nimi on '.$tudrukud[count($tudrukud)-1].'<br>';
        }
    
    ?>
    
       

<?php
$carMakes = ["Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
    "Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
    "Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
    "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
    "Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
    "Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford"];

$carVin=["1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570", 
"1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049", 
"2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665", 
"WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355", 
"SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662", 
"WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043", 
"1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691", 
"3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293", 
"1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744", 
"TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051", 
"SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172", 
"2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452", 
"5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024", 
"1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295", 
"1N6AA0EDXFN868772", "WBADW3C59DJ422810"];

 echo '<h4> Auto Ülesanded</h4>'.'<br>';
 echo 'Autode arv '.count($carMakes).'<br>';
?>
<h4>kas massiviid on ühepikkused</h4>
    <form method="post">    
        <input type="submit" name="button2"
                value="Vordle"/>
    
    </form>
<?php

if(isset($_POST['button2'])) {
 if(count($carMakes)===count($carVin)){
     echo 'Massiviid on ühepikkused'.'<br>';
 }else{
     echo ' massiviid ei ole ühepikkused'.'<br>';
     echo 'Autode arv '.count($carMakes).'<br>';
     echo 'Vin arv '.count($carMakes).'<br>';
 }
 }
?>
<h4>Toyotade ja Audide arv nimekirjas</h4>
<?php
$numberToyota=0;
$numberAudi=0;
foreach($carMakes as $car){
    if($car==="Toyota"){
        $numberToyota=$numberToyota+1;
    }
}
foreach($carMakes as $car){
    if($car==="Audi"){
        $numberAudi=$numberAudi+1;
    }
}
echo ' Toyota  arv '.$numberToyota.' autod'.'<br>';
echo ' Audi  arv '.$numberToyota.' autod';
?>
<h4>Väljasta VIN koodid,  mille märkide arv on väiksem kui 17</h4>
<?php

foreach($carVin as $vin){
    if(strlen($vin)<17){
        echo $vin.'<br>';
          
    }
}
?>
<h4>leia 2018 palkade keskmine</h4>
<?php
$kokku=0;
$palk=[1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455];
foreach($palk as $p){
   $kokku+=$p;
}
echo' keskimime palk ';
echo $kokku/count($palk);
echo '<br>'
?>
<h4>Kuva firmade nimed</h4>
<?php
$firmid=array("Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo","Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia");
foreach($firmid as $d){
        echo $d;
        echo '<br>';
        }

?>
<form method="post" action="<?=VarXcept(basename($_SERVER['REQUEST_URI']), "leht")?>">
<h3>Eemaldada firmid</h3>
<input type="text" name="firm">
<input type="submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_POST["firm"])) {
        $firm = $_POST["firm"];
        foreach($firmid as $f){
        if($firm===$f){
        unset($firmid[$f]);
        }else{
            echo $f.'<br>';
        }
        }
        

    }}
    
?>
<h4>Kuva kõige pikema riigi nime märkide arv</h4>
<?php
$rik='';
$riigid=array("Indonesia","Canada","Kyrgyzstan","Germany","Philippines",
"Philippines","Canada","Philippines","South Sudan","Brazil",
"Democratic Republic of the Congo","Indonesia","Syria","Sweden",
"Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France",
"Kazakhstan","Cuba","Portugal","Czech Republic");
foreach($riigid as $riik){
  if(strlen($riik)>strlen($rik)){
      $rik=$riik;
  }

}
echo $rik.'<br>';


?>
<h4>Hiina Nimed</h4>
<?php
$aplhabet=array("瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳",
"思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪",
"璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美");

function compareASCII($a, $b) {
    $at = iconv('UTF-8', 'ASCII//TRANSLIT', $a);
    $bt = iconv('UTF-8', 'ASCII//TRANSLIT', $b);
    return strcmp($at, $bt);
}

uasort($aplhabet, 'compareASCII');

print_r($aplhabet);

echo '<br>'.'esimene nimi '.$aplhabet[0].'<br>';
echo 'viimane nimi '.$aplhabet[count($aplhabet)-1];
echo'<br>';
?>


<h4>Pildid</h4>
 <div class="row text-center" style="padding-left: 40px;">

<?php

$dir1 = "images/"; 

$images1 = scandir($dir1);

//if there are items in the directory
if(!empty($images1)){



    //for each item found in the directory
    foreach ($images1 as $item){ 

        //if the item found is not a directory, is not a symbol for another directory (".." or ".")
        if(!is_dir($dir1.$item) && $item != ".." && $item != "."){
            
            //print the image HTML tag
            echo  '<img class="rounded-circle" alt="avatar1"  src="' . $dir1 . $item . '"alt="">'; 
            echo '<br>';

        }

    }

}
?>
</div>



</div>