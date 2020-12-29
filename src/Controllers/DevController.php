<?php


namespace App\Controllers;

use App\Data\AbstractView;
use App\Models\DevModel;
use App\Views\StandardView;

class DevController
{

    public function allDev(): AbstractView
    {
        return new StandardView([
            'list',
        ],[
            'devs' => DevModel::findAll(),
            'title' => 'coucou',
        ]);

    }
}