<?php


class MainController
{
    private $title;

    public function __construct()
    {
        $this->title= "The food is already on the table!";
    }

    function routeMappingManage()
    {
        include(__DIR__ . "./../views/main/main.php");
    }
}