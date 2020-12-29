<?php


namespace App\Data;


abstract class AbstractView
{

    /**
     * construction de la pages  rendu final
     */
    final public function render()
    {
        echo '<!doctype html>' . PHP_EOL;
        echo '<html lang="fr">' . PHP_EOL;
            $this->renderHead();
        echo '<!-- start of body -->' . PHP_EOL;
            $this->renderBody();
        echo '<!--end of body start of footer-->'. PHP_EOL;
            $this->renderFooter();
        echo '</body>' . PHP_EOL;
        echo '</html>' . PHP_EOL;

    }

    /**
     * inclue le fichier pages/templates header-navbar-script
     */
    abstract protected function renderHead(): void;

    /**
     * function qui va chercher la classname associer avec les vues
     * pages/nom.php
     */
    abstract protected function renderBody(): void;

    /**
     * inclue pages/templates/footer
     */
    abstract protected function renderFooter(): void;
}