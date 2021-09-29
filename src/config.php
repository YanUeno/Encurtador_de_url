<?php
$mysql = new mysqli('localhost','root' ,'root','teste');
$mysql-> set_charset('utf8');

if ($mysql == false){
    echo 'deu ruim';
}
?>