<?php
require('baas/conf.php');

global $yhendus;

if(isset($_REQUEST["lisamisvorm"] )&& !empty ($_REQUEST["kalanimi"])){
$kask=$yhendus->prepare("
INSERT INTO kalad(id,kalanimi,pilt,varv ) VALUES (?,?,?,?)");
$kask->bind_param("ssss", $_REQUEST["id"], $_REQUEST["kalanimi"], $_REQUEST["pilt"], $_REQUEST["varv"]);

$kask->execute();
header("Location:".strtok($_SERVER['PHP_SELF'],'?'));
exit;
}?>
<?php
    if(isset($_REQUEST["kustuta"])){
        $kask=$yhendus->prepare("DELETE FROM kalad WHERE id=?");
        $kask->bind_param("i", $_REQUEST["kustuta"]);
        $kask->execute();
    }

?>
header("Location:".strtok())

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kalade andmebaas</title>
</head>
<body>
<h1>Kalade andmebaas</h1>
<div id="lingid" >
    <?php
    global $yhendus;
    $kask = $yhendus->prepare("SELECT id, kalanimi FROM kalad");
    $kask->bind_result($id, $kalanimi);
    $kask->execute();
    echo "<ul>";

    while ($kask->fetch()){
        echo "<li><a href='?id=$id'>".$kalanimi."</a></li>";
    }
    echo "</ul>";
    echo "<a href='?lisa=jah'>Lisa..</a>";

    ?>

</div>
<div id="sisu" >
    <?php
    if(isset($_REQUEST["id"])) {
        $kask=$yhendus->prepare("SELECT id,kalanimi,pilt,varv FROM kalad where  id = ?");
        $kask->bind_param("i",$_REQUEST["id"]);
        $kask->bind_result($id,$kalanimi,$pilt,$varv);
        $kask->execute();
        if($kask->fetch()){
            echo"<p>".$id.",".$kalanimi.",".$varv."</p>";
            echo"<img src='$pilt' alt='$kalanimi'>";
            echo "<td><a href='?kustuta=$id'>Delete</a></td>";

        }
    }
    ?>
    <?php
    $yhendus->close();
    ?>




</div >
<?php
if(isset($_REQUEST["lisa"])){
    ?>
    <h2>Kala lisamine</h2>
    <form name="vorm" >
        <input type="hidden" name="lisamisvorm" value="jah">
        <label for="kalanimi">Kalanimi</label>
        <input type="text" name="kalanimi" id="kalanimi">
        <br>
        <label for="pilt">Pilt</label>
        <input type="text" name="pilt" id="pilt">
        <br>
        <label for="varv">Värv</label>
        <input type="text" name="varv" id="varv">
        <input type="submit" value="ok">
    </form>
    <?php
}
?>

</body>
</html>