<?php

namespace App\Controllers;

use App\Data\AbstractView;
use App\Data\DatabaseHandler;
use App\Models\Model;
use App\Views\MainView;

class MainController
{
    private string $title;
    private string $metaName;
    private string $metaContent;


    public function __construct()
    {
        $this->title = "Une Passion, Un métier!";
        $this->metaName = "description";
        $this->metaContent = "Identité Numérique d'une développeuse web et web mobile en devenir";
    }

    public function home(): AbstractView
    {
        return new MainView();
    }
}