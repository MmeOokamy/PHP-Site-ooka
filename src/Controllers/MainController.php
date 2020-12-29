<?php

namespace App\Controllers;

use App\Data\AbstractView;
use App\Data\DatabaseHandler;
use App\Views\MainView;

class MainController
{

    public function home(): AbstractView
    {
        return new MainView();
    }
}