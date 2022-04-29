<?php

namespace App\Controller;

use App\Service\BookService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{

    /** @var BookService */
    private $service;

    /**
     * @param BookService $service
     */
    public function __construct(BookService $service){
        $this->service = $service;
    }

    /**
     * @Route("/books", name="books")
     *
     * @return Response
     */
    public function index(): Response
    {
        dd($this->service->getBooks());
    }

    public function book()
    {

    }

    public function author()
    {

    }

    public function publishingDate()
    {

    }

    public function category()
    {

    }

}
