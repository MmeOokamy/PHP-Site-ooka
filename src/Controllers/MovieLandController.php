<?php


namespace App\Controllers;


use App\Data\AbstractView;
use App\Models\MovieLandModel;
use App\Views\StandardView;

class MovieLandController
{
public function home(): AbstractView
{
    return new StandardView(['ecf/home'], [
        'title' => 'Ma base de Données de Film!',
        'movies' => MovieLandModel::findAll(),

    ]);
}

public function createMovie(): AbstractView
{
    return new StandardView(['ecf/home'], [
        'title' => 'Ma base de Données de Film!',
        'movies' => MovieLandModel::findAll(),

    ]);
}




}