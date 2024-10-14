<?php 
require_once ("utilisateur.php");
class config {
    private static $pdo = null;

    public static function getConnexion() {
        if (!isset(self::$pdo)) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "atelier6Esprit";

            try {
                self::$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]);
                echo "connected successfully"; 
            } catch (Exception $e) {
                die('error: ' . $e->getMessage());
                
                
            }
        }
        return self::$pdo;
    }
}


config::getConnexion();

?>