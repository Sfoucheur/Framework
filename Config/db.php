<?php

class Database
{
    private static $bdd = null;

    private function __construct() {
    }

    public static function getBdd() {
        if(is_null(self::$bdd)) {
            try{
                self::$bdd = new PDO("mysql:host=localhost;dbname=_AutoEvalRH", 'cdg22', 'cdg22');
            }catch(PDOException $e){
                echo 'Erreur lors de la connexion avec la base de données';
            }
        }
        return self::$bdd;
    }
}
?>