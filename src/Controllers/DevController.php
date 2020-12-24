<?php


namespace App\Controllers;

use App\Data\DatabaseHandler;
use App\Models\Model;

class DevController
{
    private $title;
    private $metaName;
    private $metaContent;
    private $model;
    private $list;

    public function __construct()
    {
        $this->title = "Il faut s'exercer pour apprendre!";
        $this->metaName = "description";
        $this->metaContent = "Ma liste de tâche à développer, ajout de fonctionnalité";
        $this->model = new Model();

    }

    function routeMappingManage()
    {
        $this->list = $this->model->devList();
        include(__DIR__ . "./../Views/list.php");
    }


}