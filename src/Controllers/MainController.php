<?php

namespace App\Controllers;

use App\Data\DatabaseHandler;
use App\Models\Model;

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
        include(__DIR__ . "./../Views/main.php");
    }
}