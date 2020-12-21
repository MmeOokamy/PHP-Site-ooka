<?php


class AboutController
{
    private $title;
    private $metaName;
    private $metaContent;


    public function __construct()
    {
        $this->title = "Changer de vie et me reconvertir vers une vieille passion d'adolescente!";
        $this->metaName = "description";
        $this->metaContent = "Parcours de Vie";
    }

    function routeMappingManage()
    {
        include(__DIR__ . "./../Views/about.php");
    }
}