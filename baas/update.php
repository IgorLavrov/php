<?php

require ('conf.php');



global $yhendus;

if(isset($_REQUEST["healaul"])){
$kask=$yhendus->prepare("Update eestilaul set punktid=punktid+1 where id=?");
$kask-> bind_param("i",$_REQUEST["healaul"]);
$kask->execute();

header("Location: $_SERVER[PHP_SELF]");
}
//kommentaaride lisamine
if(isset($_REQUEST["uuskomment"])){
    if(!empty ($_REQUEST["komment"])){
    $kask=$yhendus->prepare("Update eestilaul set  kommentaarid=concat(IFNULL(kommentaarid,''),?) where id=?");
    //IFNULL(kommentaarid,'')-tuhi kommentiväli loeb ja lisab
        $lisakomment=$_REQUEST["komment"]."\n";
    $kask-> bind_param("si",$lisakomment,$_REQUEST["uuskomment"]);
    $kask->execute();

    header("Location: $_SERVER[PHP_SELF]");
}
}

if(isset($_REQUEST["pahalaul"])){
    $kask=$yhendus->prepare("Update eestilaul set punktid=punktid-1 where id=?");
    $kask-> bind_param("i",$_REQUEST["pahalaul"]);
    $kask->execute();
   header("Location: $_SERVER[PHP_SELF]");
}

if(isset($_REQUEST["kustuta"])){
    $kask=$yhendus->prepare("Update eestilaul set kommentaarid='' where id=?");
    $kask->bind_param("s", $_REQUEST["kustuta"]);
    $kask->execute();
    header("Location: $_SERVER[PHP_SELF]");
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kalade andmebaas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<h1>Eesti Targv22 Laulukonkurs</h1>
<table class="table table-striped">
    <tr>
        <th> Laulunimi</th>
        <th> Laulja</th>
        <th> Punktid</th>
        <th> kommentaarid</th>

    </tr>
    <?php
    global $yhendus;
    $kask = $yhendus->prepare("SELECT id,laulunimi,laulja,punktid,kommentaarid  FROM eestilaul");
    $kask->bind_result($id, $laulunimi,$laulja,$punktid,$kommentaarid);
    $kask->execute();

    while ($kask->fetch()){
        echo "<tr>";
        echo "<td>".$laulunimi."</td>";
        echo "<td>".$laulja."</td>";
        echo "<td>".$punktid."</td>";
        echo "<td>".nl2br(htmlspecialchars($kommentaarid))."</td>";
        echo"<td>"."<a href='?healaul=$id'>Lisa 1 punkt </a>"."</td>";
        echo"<td>"."<a href='?pahalaul=$id'>Minus 1 punkt </a>"."</td>";

        echo "<td><a href='?kustuta=$id'>Delete Kommentaarid</a></td>";
        echo "<td>
<form>
<input type ='hidden' value='$id' name='uuskomment'>
<input type='text' name='komment'>
<input type='submit' value='Lisa kommentaarid'>
</form>
</td>";
        echo "</tr>";
    }
    ?>





    <?php
    $yhendus->close();
    ?>

    </table>