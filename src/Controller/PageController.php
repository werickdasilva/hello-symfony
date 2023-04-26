<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController 
{
    /*
        paramentro da rota seria assim

        nome do parametro dimanico slug
        tem que ter numero <\d+>
        se não passar nem um numero será adicionado o 1 por padrão ?1

        fica assim 
        /{slug<\d+>?1}
    */
    #[Route('/page/{slug<\d+>?1}', name: 'page_controller', methods: 'GET')]
    public function pages(int $slug)
    {
        return new Response("Page is $slug");
    }
}