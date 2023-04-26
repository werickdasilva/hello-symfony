<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController 
{
    #[Route('/hello', methods: 'GET', name: 'hello_controller')]
    public function hello(): Response
    {
        return new Response('Hello World Symfony');
    }

    #[Route('/hello', methods: 'POST', name: 'hello_controller_post')]
    public function helloPost(): Response
    {
        return new Response('Post method');
    }
}
