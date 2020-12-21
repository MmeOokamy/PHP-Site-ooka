<?php


class AddDevListController
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
        $this->metaContent = "Ajout tâche à développer, ajout de fonctionnalité";
        $this->model = new Model();
    }

    function routeMappingManage()
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