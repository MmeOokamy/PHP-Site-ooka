<?php


namespace App\Controllers;

use App\Data\DatabaseHandler;
use App\Models\DevModel;
use App\Views\StandardView;

class DevController
{

    public function allDev(): StandardView
    {
        return new StandardView([
            'list'
        ],[
            'title'=>'Coucou'
        ]);

    }


}