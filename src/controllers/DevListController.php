<?php


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
        include(__DIR__ . "./../views/list.php");
    }


}