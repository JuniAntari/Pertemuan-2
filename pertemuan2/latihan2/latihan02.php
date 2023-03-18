<?php
// area script PHP 
    $pg = 1;
    if(isset($_GET["pg"])){
        $pg = $_GET["pg"];

    }
 

    switch ($pg){
        case 1:
            $Konten ="<h3>Page 1</h3>";
            $JudulPage = "Page 2";
            break;
        case 2:
            $Konten ="<h3>Page 2</h3>";
            $JudulPage = " Page 2";
            break;
        case 3:
            $Konten ="<h3>Page 3</h3>";
            $JudulPage = "Page 3";
            break;
        default:
             $Konten ="<h3>Page 1</h3>";
             $JudulPage = "Page 1";
            break;
            

    }
    
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$JudulPage?></title>
</head>
<body>
 
<ul>
     
    <li><a href="?pg=1">Page 1</a></li>
    <li><a href="?pg=2">Page 2</a></li>
    <li><a href="?pg=3">Page 3</a></li>
</ul>
    <?=$Konten;?>
</body>
</html>