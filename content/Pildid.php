<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<h4>Pildid</h4>
 <div class="row text-center" style="padding-left: 40px;">

<?php

$dir1 = "www.lavrov21.thkit.ee/htdocs/php/images/"; 

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
