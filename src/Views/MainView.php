<?php


namespace App\Views;


use App\Data\AbstractView;

class MainView extends AbstractView
{

    protected function renderHead(): void
    {
        include './src/pages/main/head.main.php';
    }

    protected function renderBody(): void
    {
        include './src/pages/main/body.main.php';
    }

    protected function renderFooter(): void
    {
        include './src/pages/main/footer.main.php';
    }


}