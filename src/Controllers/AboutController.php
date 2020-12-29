<?php

namespace App\Controllers;

use App\Data\AbstractView;
use App\Data\DatabaseHandler;
use App\Views\StandardView;

class AboutController
{


    public function about(): AbstractView
    {
        return new StandardView(['about',]);
    }
}