<?php


namespace App\Controllers;

use App\Data\AbstractView;
use App\Models\DevModel;
use App\Views\StandardView;

class DevController
{

    public function allDevView(): AbstractView
    {
        return new StandardView([
            'list',
        ], [
            'devs' => DevModel::findAll(),
            'title' => 'coucou',
        ]);
    }

    public function insertDevView(): StandardView
    {

        if (isset($_POST['dev_description'])) {
            $request = new DevModel();
            $request->create($_POST['dev_description']);
            if ($request === true) {
                $alerteMessage = '<div class="alert alert-success mt-5">
            Votre étape de développement a été sauvegardé !</div>';
            } else {
                $alerte = '<div class="alert alert-warning mt-5">
            Votre étape de développement n\'a pas été sauvegardé !</div>';
            }
        }

        return new StandardView(
            [
                'form/insertDev'
            ], [
                'devs' => DevModel::findAll(),

            ]
        );
    }
}