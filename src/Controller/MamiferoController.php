<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MamiferoController
{
    public function homepage()
    {
        return new Response('Olá, mamíferos!');
    }
}