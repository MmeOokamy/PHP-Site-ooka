<?php


namespace App\Views;


use App\Data\AbstractView;

class MainView extends AbstractView
{

    protected function renderHead(): void
    {
        // TODO: Implement renderHead() method.
    }

    protected function renderBody(): void
    {
        include './src/pages/main.php';
    }

    protected function renderFooter(): void
    {
        // TODO: Implement renderFooter() method.
    }
}