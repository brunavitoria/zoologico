<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MamiferoController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Olá, mamíferos!');
    }

    /**
     * @Route("/mamifero/{slug}")
     */
    public function show($slug)
    {
        return new Response(
            sprintf('<html><body>Esta é a página de um mamífero "%s"!</body></html>', ucwords(str_replace('-', ' ', $slug)))
        );
    }
}