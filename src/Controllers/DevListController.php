<?php

namespace App\Controllers;

use App\Data\DatabaseHandler;
use App\Models\Model;

class DevListController
{

    private $title;
    private $metaName;
    private $metaContent;
    private $list;
    private $model;


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

    function create()
    {
        $this->list = $this->model->devList();
        if(isset($_POST['name']) && !empty($_POST['name'])){
            $request = $this->model->addDevList($_POST['name']);
            if($request === true){
                $alerte = '<div class="alert alert-success mt-5">
            Sauvegardé !</div>';
            } else {
                $alerte = '<div class="alert alert-warning mt-5">
            C\'est mort !</div>';
            }
        }
        include(__DIR__ . "./../Views/addList.php");
    }

}