<?php
    class Conexao{
        public static $conexao;

        public static function conecta(){
            if(!isset(self::$conexao)){
                try{
                    self::$conexao = new PDO("mysql:host=localhost; dbname=pizza", "admpizza", "12345");
                }
                catch(PDOException $e){
                    echo "Erro de conexão: ". $e->getMessage();
                    die();
                }
            }
            return self::$conexao;
        }
    }
?>