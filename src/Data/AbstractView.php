<?php


namespace App\Data;


abstract class AbstractView
{

    final public function render()
    {
        echo '<!doctype html>' . PHP_EOL;
        echo '<html lang="fr">' . PHP_EOL;

            $this->renderHead();
        echo '<body>' . PHP_EOL;

            $this->renderBody();
        echo '<!--end of body start of footer-->'. PHP_EOL;
            $this->renderFooter();

        echo '</body>' . PHP_EOL;
        echo '</html>' . PHP_EOL;

    }

    abstract protected function renderHead(): void;

    abstract protected function renderBody(): void;
    abstract protected function renderFooter(): void;
}