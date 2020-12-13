<?php


class MainController
{
    private $title;
    private $metaName;
    private $metaContent;


    public function __construct()
    {
        $this->title = "Une Passion, Un métier!";
        $this->metaName = "description";
        $this->metaContent = "Identité Numérique d'une développeuse web et web mobile en devenir";
    }

    function routeMappingManage()
    {
        include(__DIR__ . "./../views/main.php");
    }
}