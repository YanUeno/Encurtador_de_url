<?php
    class Encurtar{
        private $mysql;
        public function __construct(mysqli $mysql){
            $this ->mysql = $mysql;
        }
        public function adicionar(string $link, string $caminho):void{
            
            $adiciona = $this->mysql->prepare('INSERT into links(link,caminho) VALUES (?,?)');
            $adiciona -> bind_param('ss', $link,$caminho);
            $adiciona -> execute();
        }

        public function abrir(string $caminho): array
        {
            $abrir = $this->mysql->prepare('SELECT link FROM teste.links where caminho = ?;');
            $abrir -> bind_param('s', $caminho);
            $abrir -> execute();
            $res = $abrir ->get_result()->fetch_assoc();
            return $res;
        }

        public function check_existe(string $url):void{
        }


    }




?>