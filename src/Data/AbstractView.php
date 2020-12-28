<?php


namespace App\Data;


abstract class AbstractView
{
    final public function render()
    {
        echo 'je suis le render' . PHP_EOL;
        echo 'j\'affiche le header apres' . PHP_EOL;

            $this->renderHead();

        echo 'j\'affiche le body apres' . PHP_EOL;
            $this->renderBody();
        echo 'j\'affiche le footer apres' . PHP_EOL;
            $this->renderFooter();
    }

    abstract protected function renderHead(): void;
    abstract protected function renderBody(): void;
    abstract protected function renderFooter(): void;
}