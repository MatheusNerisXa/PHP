<?php

namespace Alura\Mvc\Controller;

abstract class ControllerWithHtml implements Controller
{
    private const  TEMPLATE_PATH = '/../../views/';
    protected  function renderTemplate(string $templateName, array $contex = []): string
    {
        extract($contex);
        ob_start();
        require_once __DIR__ . self::TEMPLATE_PATH . $templateName . '.php';
        return ob_get_clean();
    }
}