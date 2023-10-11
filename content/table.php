<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="style.css">
   
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <style>
  input{
    margin: 10px;
}
            </style>

</head>
<body>
        <div class="main">
        <form action="insert.php" method="POST" enctype="multipart/form-data" >
        <label for="">ID:</label>
        <input type="number" name="ID"><br>
        <label for="">Nimi:</label>
        <input type="text" name="nimi"><br>
        <label for="">Perekonnanimi:</label>
        <input type="text" name="perekonnanimi" id=""><br>
        <label for=""> Pilt:</label>
        <input type="file" name="pilt" id=""><br>
        <label for="">Sunniaeg</label>
        <input type="date" name="sunniaeg" id=""><br>
        <button type="submit" name="upload">Sumbit</button>
        </form>
    </div>
        

        <!-- fetch data -->

        <div class="container">

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nimi</th>
      <th scope="col">Perekonanimi</th>
      <th scope="col">Pilt</th>
      <th scope="col">Sunniaeg</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>  
    </tr>
  </thead>

  <tbody>
     
       

  </tbody>
</table>
</div>
</body>
</html>