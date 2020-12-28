<?php


namespace App\Controllers;


use App\Data\AbstractView;

class ErrorController
{
    public function pageNotFound(): AbstractView
    {
        echo 'Ya rien chef!';
        var_dump($_REQUEST);
        die();
    }
}