<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController
{

    /**
     * @Route("/")
     * @return Response
     */
    public function index(): Response
    {
        return new Response(
            '<html><body>Lucky number:</body></html>'
        );
    }

}
