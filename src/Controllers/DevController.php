<?php


namespace App\Controllers;

use App\Data\DatabaseHandler;
use App\Models\DevModel;
use App\Views\StandardView;

class DevController
{
    /**
     * Pour chaque vue rajouter 2 variables 'title' et 'metaContente' //
     */

    /**
     * @return StandardView
     */
    public function allDev()
    {
        return new StandardView([
            'list'
        ],[
            'devs' => DevModel::findAll(),
            'title' =>'Coucou'
        ]);

    }


}