<?php
 namespace App\Data;


final class DatabaseHandler
{
    /**
     * @static
     * @var \PDO
     */
    private static $instance;


    private function __construct()
    {

        $host = "localhost";
        //$user = "ookadnzb_ooka";
        //$mdp = "jesuisunechaussette";
        //$databaseName = "ookadnzb_ooka_land";
        $user = "root";
        $mdp = "";
        $databaseName = "ooka_land";
        try {
            $this->handle = new \PDO(
                "mysql:host=$host;dbname=$databaseName;charset=utf8",
                $user, $mdp,
                [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
            );
        } catch ( \PDOException $e){
            die('Échec de la connexion avec la base de donnée : ' . $e->getMessage());
        }
    }

    /**
     * @return \PDO
     * @static
     */
    private static function getInstance(): \PDO
    {
        if (is_null(DatabaseHandler::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @param string $sqlQuery
     * @return \PDOStatement
     */
    public static function query(string $sqlQuery): \PDOStatement
    {
        return DatabaseHandler::getInstance()->query($sqlQuery);
    }

    /**
     * @param string $sqlQuery
     * @return \PDOStatement
     */
    public static function prepare(string $sqlQuery): \PDOStatement
    {
        return DatabaseHandler::getInstance()->prepare($sqlQuery);
    }

    /**
     * @return int
     */
    public static function lastInsertId(): int
    {
        return DatabaseHandler::getInstance()->lastInsertId();
    }

}