<?php
require("abifunktsioonid.php");
if(isSet($_REQUEST["grupilisamine"]) && !empty ($_REQUEST["uuegrupinimi"])){
    lisaGrupp($_REQUEST["uuegrupinimi"]);
    header("Location: kaubahaldus.php");
    exit();
}
if(isSet($_REQUEST["kaubalisamine"])&& !empty ($_REQUEST["nimetus"])){
    lisaKaup($_REQUEST["nimetus"], $_REQUEST["kaubagrupi_id"], $_REQUEST["hind"]);  header("Location: kaubahaldus.php");
    exit();
}
if(isSet($_REQUEST["kustutusid"])){
    kustutaKaup($_REQUEST["kustutusid"]);
}
 
if(isSet($_REQUEST["muutmine"])){
    muudaKaup($_REQUEST["muudetudid"], $_REQUEST["nimetus"],
        $_REQUEST["kaubagrupi_id"], $_REQUEST["hind"]);  }
$kaubad=kysiKaupadeAndmed();
  
$sorttulp="nimetus";
$otsisona="";
if(isSet($_REQUEST["sort"])){
    $sorttulp=$_REQUEST["sort"];
}
if(isSet($_REQUEST["otsisona"])){
    $otsisona=$_REQUEST["otsisona"];
}
$kaubad=kysiKaupadeAndmed($sorttulp, $otsisona);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Kaupade leht</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">Pood</h1>
<h2>Kaupade loetelu</h2>
<form action="?">
<div class="form-group">
    Otsi: <input type="text" name="otsisona" />
</div>
</form>
<form action="kaubahaldus.php">
<table class="table">
    <tr>
        <th scope="col">Haldus</th>
        <th scope="col"><a href="?sort=nimetus">Nimetus</a></th>
        <th scope="col" ><a href="?sort=grupinimi">Kaubagrupp</a></th>
        <th scope="col"><a href="?sort=hind">Hind</a></th>
    </tr>

    <?php foreach($kaubad as $kaup): ?>
        <tr>
            <?php if(isset($_REQUEST["muutmisid"]) &&
                intval($_REQUEST["muutmisid"])==$kaup->id): ?>  
                <td>
                <input  type="submit" name="muutmine"  class="btn btn-secondary" role="button"  value="Muuda" /> 
                 <input type="submit"  class="btn btn-secondary" role="button" name="katkestus" value="Katkesta" /> 
                  <input type="hidden" name="muudetudid" value="<?=$kaup->id ?>" />  </td>
                <td><input type="text" name="nimetus" value="<?=$kaup->nimetus ?>" /></td> 
                 <td><?php
                    echo looRippMenyy("SELECT id, grupinimi FROM kaubagrupid","kaubagrupi_id");  ?></td>
                <td><input type="text" name="hind" value="<?=$kaup->hind ?>" /></td>  <?php else: ?>
                <td>
                    <a href="?kustutusid=<?=$kaup->id ?>"  class="btn btn-danger" role="button" onclick="return confirm('Kas ikka soovid kustutada?')">X</a>
                    <a href="?muutmisid=<?=$kaup->id ?>"  class="btn btn-info" role="button" >M</a>
                    </td>
                <td><?=$kaup->nimetus ?></td>
                <td><?=$kaup->grupinimi ?></td>
                <td><?=$kaup->hind ?></td>
            <?php endif ?>
        </tr>
    <?php endforeach; ?>
</table>
 </form>

<div class="row">
    <div class="col-xs-1" align="center">

<form action="kaubahaldus.php">
    <h2>Kauba lisamine</h2>
    <div class="row">
        <div class="col">
    <dl>
        <dt>Nimetus:</dt>
        <dd><input type="text"  class="form-control"  name="nimetus" /></dd>
        </div>
        <div class="col">
        <dt>Kaubagrupp:</dt>
        <dd><?php
            echo looRippMenyy("SELECT id, grupinimi FROM kaubagrupid",   "kaubagrupi_id");
            ?>
        </dd>
        </div>
        <div class="col">
        <dt>Hind:</dt>
        <dd><input type="text"  class="form-control"  name="hind" /></dd>
        </div>
    </div>
    <div class="col">
        <div class="input-group mb-3">
        <input type="text" name="uuegrupinimi" class="form-control" placeholder="Kaubagrupp Lisamine" aria-label="Kaubagrup Lisamine" aria-describedby="button-addon2">

        <button type="submit"  name="grupilisamine" class="btn btn-outline-primary" type="button" id="button-addon2"> Lisa</button>
    </div>
    </div>

<br>
    <button type="submit"  name="kaubalisamine"  value="Lisa kaup" class="btn btn-success">Lisa kaup</button>
    </dl>
</form>
    </div>
</div>


</body>

</html>