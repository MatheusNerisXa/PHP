<?php

namespace Alura\Mvc\Controller;

class LogoutController implements Controller
{
    public function processaRequisicao(): void
    {
       session_destroy();
       header('Location: /login');
    }
}