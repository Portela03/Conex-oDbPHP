<?php

namespace App\persitence;

use PDO;
use PDOException;
use App\SystemServices\MonologFactory;

class ConnectionFactory {
    
    private static $host = 'localhost';
    private static $dbname = 'atividadephp'; 
    private static $user = 'root'; 
    private static $password = ''; 

    public static function getConnectionFactory() {
        try {
           
            $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$user, self::$password);
        
           
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            
            MonologFactory::getInstance()->info("Conexão com banco sucedida");
        } catch (PDOException $e) {
            
            MonologFactory::getInstance()->info('Erro na conexão: ' . $e->getMessage());
       
        }
    }
}

?>
