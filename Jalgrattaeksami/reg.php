<?php
require_once("conf.php");
if(isSet($_REQUEST["sisestusnupp"])){
if(preg_match('#[0-9]#',$_REQUEST["perekonnanimi"])
    || preg_match('#[0-9]#',$_REQUEST["eesnimi"])
    ||empty($_REQUEST["eesnimi"])
    ||empty($_REQUEST["perekonnanimi"]) )   {
    echo "valesti sisestatud ees või perekonnanimi";
}else {
    global $yhendus;
    $kask=$yhendus->prepare(
        "INSERT INTO jalgrattaeksam(eesnimi, perekonnanimi) VALUES (?, ?)");
    $kask->bind_param("ss", $_REQUEST["eesnimi"], $_REQUEST["perekonnanimi"]); $kask->execute();
    $yhendus->close();
    header("Location: $_SERVER[PHP_SELF]?lisatudeesnimi=$_REQUEST[eesnimi]");
    header("Location:teoria.php");
    exit();

}}
?>
<!doctype html>
<html>
<head>
    <title>Kasutaja registreerimine</title>
</head>

<header>
    <?php
    session_start();
    if (!isset($_SESSION['tuvastamine'])) {
        header('Location: login.php');
        exit();
    }?>

    <?php

    include('navigation.php')

    ?>
</header>
<body>
<h1>Registreerimine</h1>
<?php
if(isSet($_REQUEST["lisatudeesnimi"])){
    echo "Lisati $_REQUEST[lisatudeesnimi]";
}
?>
<form action="?">
    <dl>
        <dt>Eesnimi:</dt>
        <dd><input type="text" name="eesnimi" /></dd>
        <dt>Perekonnanimi:</dt>
        <dd><input type="text" name="perekonnanimi" /></dd>
        <dt><input type="submit" name="sisestusnupp" value="sisesta" /></dt>  </dl>
</form>
</body>
</html>