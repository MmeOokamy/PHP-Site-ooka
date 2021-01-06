<?php


namespace App\Controllers;


use App\Data\AbstractView;
use App\Models\MovieLandModel;
use App\Views\StandardView;

class MovieLandController
{
public function home(): AbstractView
{
    $movieList = MovieLandModel::findAll();
    if($movieList === false) {
        $alerte = '<div class="alert alert-danger mt-5">Il y a un problème!</div>';
    } elseif (count($movieList) === 0 ){
        $alerte = '<div class="alert alert-warning mt-5">
            Il n\'y a pas de film !</div>';
    } else {
        $alerte = '<div class="alert alert-info mt-5">' . count($movieList) . ' film(s) enregistré(s)!</div>';
    }
    return new StandardView(['ecf/home'], [
        'title' => 'Ma base de Données de Film!',
        'movies' => $movieList,
        'alerte' => $alerte,

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