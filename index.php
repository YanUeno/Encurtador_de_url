<?php
  

    require 'src/config.php';
    require 'src/Arquivo.php';
    require 'src/redireciona.php';
    require 'vendor/autoload.php';
    // require 'src/hash.php';
    use Hashids\Hashids;
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $hashids = new Hashids();
        $hash = $hashids->encode(123);

        $arquivo = new Encurtar($mysql);
        $encurtar = $arquivo -> adicionar($_POST['url'],$hash);
        $caminho = $base_url.'abrir.php?c='.$hash;
        
        echo $caminho;
    }
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home</title>
</head>
<body>
    <form action="index.php" method="post">
        <p>
            <label for="">Digite a url</label>
            <input class="campo-form" type="text" name="url" id="url" />
        </p>
        <p>
            <button class="botao">Encurtar</button>
        </p>
    </form>


</body>
</html>