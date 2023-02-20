<?php
   abstract class Conexao{
        #realizara a conexao com a BD
        protected function conectBD(){
            try {
                $con = new PDO("mysql:host=localhost;dbname=crud", "root","");
                return $con;
            } catch (PDOException $erro) {
                return $erro -> getMessage();
            }
        }
    }
?>