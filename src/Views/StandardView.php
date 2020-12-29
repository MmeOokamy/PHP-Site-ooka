<?php
namespace App\Views;


use App\Data\AbstractView;

class StandardView extends AbstractView
{
    protected array $templates;
    protected array $variables;

    /**
     * AbstractView constructor.
     * @param array $templates
     * @param array $variables
     */
    public function __construct(array $templates, array $variables = [])
    {
        $this->templates = $templates;
        $this->variables = $variables;
    }

    protected function renderHead(): void
    {
        include './src/pages/template/header.php';
    }


    protected function renderBody(): void
    {
        /// Pour chaque couple de nom de variable/valeur
        foreach ($this->variables as $varName => $value) {
            // Crée une variable qui a pour nom le contenu de $varName
            // et lui assigne la valeur correspondante
            $$varName = $value;
        }
        // Inclue les templates fournis lors de la création de l'objet
        foreach ($this->templates as $template) {
            include './src/pages/' . $template . '.php';
        }
    }

    protected function renderFooter(): void
    {
        include './src/pages/template/footer.php';
    }


}