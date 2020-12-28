<?php
 namespace App\Data;


final class DatabaseHandler
{
    /**
     * @static
     * @var \PDO
     */
    private static $instance;


    private function __construct(){}

    /**
     *
     * @static
     */
    private static function getInstance(): \PDO
    {
        $host = "localhost";
        //$user = "ookadnzb_ooka";
        //$mdp = "jesuisunechaussette";
        //$databaseName = "ookadnzb_ooka_land";
        $user = "root";
        $mdp = "";
        $databaseName = "ooka_land";

        if (is_null(DatabaseHandler::$instance)){
           $dbh = new \PDO(
               "mysql:host=$host;dbname=$databaseName;charset=utf8",
               $user, $mdp,
               [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
           DatabaseHandler::$instance = $dbh;
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