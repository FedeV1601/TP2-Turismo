<?php

class DB {

 
    public static function getConn(){

        try {
            $db = new PDO('mysql:dbname=turismo;host=localhost;charset=utf8', 'root', '');
        } catch(PDOException $e) {
            $db = null;
            echo '<h1>Error de conexión</h1>';
            exit;
        }
        return $db;
    }
}



