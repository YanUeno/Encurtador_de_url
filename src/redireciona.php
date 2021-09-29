<?php


function redireciona(string $url):void{ 
    header("location: $url");
    die();
}
$base_url = 'http://localhost/projetos/encurtador_url/';
function url(){
    return sprintf(
      "%s://%s%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME'],
      $_SERVER['REQUEST_URI']
    );
}