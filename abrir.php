<?php
    require 'src/config.php';
    require 'src/Arquivo.php';
    require 'src/redireciona.php';


    if($_SERVER['REQUEST_METHOD'] === 'POST'){
       
        // echo `<input type="" value="$caminho"/>`;
        // header ("location: index.php");
    }
    
    $arquivo = new Encurtar($mysql);
    $encurtar = $arquivo -> abrir($_GET['c']);

    // $encurtar = $_GET['caminho'];
    $link=$encurtar['link'];
    header('location: '.$link) 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="url" href="style.css">
    <title>Home</title>
</head>
<body>
    
</body>
</html>