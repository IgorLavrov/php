<?php
require('conf.php');
// lehe suunamine, kui sisu on juba teele läinud (Headers already sent)
function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}
?>
<?php

if(isset($_REQUEST["vorm"] )&& !empty ($_REQUEST["Nimi"])){
$kask=$yhendus->prepare("INSERT INTO Osalejad(Id,Nimi,Perekonnanimi,Pilt,Vanus) VALUES (?,?,?,?,?)");
$kask->bind_param("isssi", $_REQUEST["Id"], $_REQUEST["Nimi"], $_REQUEST["Perekonnanimi"],$_REQUEST["Pilt"], $_REQUEST["Vanus"]);
$kask->execute();
}
?>



<?php

if(isset($_REQUEST["kustuta"])){
    $kask=$yhendus->prepare("DELETE FROM Osalejad WHERE id=?");
    $kask->bind_param("i", $_REQUEST["kustuta"]);
    $kask->execute();
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  
</head>
<body>
    <h1>Matkajad</h1>
    <a href='?lisa=jah'>Lisa..</a>
    <?php
if(isset($_REQUEST["lisa"])){
    ?>
    <h2>Matkajale lisamine</h2>
    <form name="vormid"  class="form-inline">
    <div class="input-group">

        <input type="hidden" name="vorm"  class="form-control" value="jah">
       <label for="Id">Id</label>
       <input type="number" class="form-control"   name="Id" value="jah"><br>
       <label for="Nimi">Nimi:</label>
       <input type="text"  class="form-control" name="Nimi"><br>
       <label for="Perekonnanimi">Perekonnanimi:</label>
       <input type="text"  class="form-control" name="Perekonnanimi" id=""><br>
       <label for="Pilt">Pilt</label>
       <input type="text" class="form-control" name="Pilt" id=""><br>
       <label for="Vanus">Vanus</label>
      <input type="number" class="form-control"  name="Vanus" id=""><br>
      <input type="submit"  class="btn btn-default" value="Lisa">
      
    </form>
    <?php
}
?>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Nimi</th>
            <th>Perekonnanimi</th>
            <th>Pilt</th>
            <th>Vanus</th>
        </tr>
        <?php
        global $yhendus;
        $kask=$yhendus->prepare("SELECT id, Nimi, Perekonnanimi, Pilt,Vanus FROM Osalejad");
        $kask->bind_result($id, $Nimi, $Perekonnanimi, $Pilt, $Vanus);
        $kask->execute();

        while($kask->fetch()){
         echo "<tr>";
            echo "<td>".htmlspecialchars($id)."</td>";
            echo "<td>".htmlspecialchars($Nimi)."</td>";
            echo "<td>".htmlspecialchars($Perekonnanimi)."</td>";
            echo "<td>"."<img src='$Pilt' width='120' height='150'>"."</td>";
            echo "<td>".htmlspecialchars($Vanus)."</td>";
            echo "<td><a href='?kustuta=$id'>Delete</a></td>";
            echo "</tr>";
        }
        ?>

    </table>
    <?php
$yhendus->close();
?>


</body>
</html>