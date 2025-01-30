<?php
    
    class Conexao 
    {
        
        private static $con;
        
        public static function getCon()
        {
            
            if (self::$con == null)
            {
                
                $dadosCon = "mysql:host=localhost:3306;dbname=Veiculos";
                
                $opcoes = array
                (
                    
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    
                );
                
                self::$con = new PDO($dadosCon, "root", "bancodedados", $opcoes);
                
            }
            return self::$con;
            
        }
        
    }
    
?>