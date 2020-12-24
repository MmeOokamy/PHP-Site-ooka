<?php

namespace App\Models;

use App\Data\DatabaseHandler;

class Model
{
    private $handle;

    public function __construct()
    {
        $dbh = DatabaseHandler::getInstance();
        $this->handle = $dbh->getHandle();
    }

    public function devList()
    {
        try {
            $request = $this->handle->prepare('SELECT * FROM todolist');
            $request->execute();
            return $request->fetchAll();


        } catch (PDOException $e) {
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
            die();
        }
    }

    public function addDevList($name)
    {
        try {
            $request = $this->handle->prepare('INSERT INTO `todolist`(`todo_name`) VALUES (?)');
            $request->execute([$name]);
            return true;
        } catch (PDOException $e) {
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
            return false;
        }
    }
}