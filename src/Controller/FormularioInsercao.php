<?php

namespace Alura\Cursos\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;

class FormularioInsercao implements RequestHandlerInterface
{
    private $entityManager;

    // EntityManagerInterface auto inject by ContainerBuilder (dependency injection)
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $html = '<h1>Teste</h1>';
        return new Response(200, [], $html);
    }
}