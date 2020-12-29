<?php


namespace App\Controllers;


use App\Data\AbstractView;
use App\Views\StandardView;

class ErrorController
{
    public function pageNotFound(): AbstractView
    {
        return new StandardView([
            'error404',
        ]);


    }
}