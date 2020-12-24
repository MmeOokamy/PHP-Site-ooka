<?php
 namespace App\Data;

class DatabaseHandler
{
    private static $instance = null;
    private $handle;

    public function __construct()
    {

        $host = "localhost";
        $user = "ookadnzb_ooka";
        $mdp = "jesuisunechaussette";
        $databaseName = "ookadnzb_ooka_land";
        try {
            $this->handle = new PDO(
                "mysql:host=$host;dbname=$databaseName;charset=utf8",
                $user, $mdp,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch ( PDOException $e){
            die('Échec de la connexion avec la base de donnée : ' . $e->getMessage());
        }
    }

    public static function getInstance(){
        if (is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getHandle()
    {
        return $this->handle;
    }
}