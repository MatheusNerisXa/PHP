<?php

namespace Alura\Mvc\Helper;

trait HtmlRenderTrait
{
    private function renderTemplate(string $templateName, array $contex = []): string
    {
        $templatePath = '/../../views/';
        extract($contex);
        ob_start();
        require_once __DIR__ .  $templatePath . $templateName . '.php';
        return ob_get_clean();
    }

}