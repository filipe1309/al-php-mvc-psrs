<?php

namespace Alura\Cursos\Controller;

interface InterfaceControladorRequisicao
{
    public function processaRequisicao(ServerRequestInterface $request): ResponseInterface;
}