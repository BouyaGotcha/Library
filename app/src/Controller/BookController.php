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
    public function __construct(BookService $service)
    {
        $this->service = $service;
    }

    /**
     * @Route("/books", name="books")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('book/list.html.twig', [
            'books' => $this->service->getBooks()
        ]);
    }

    /**
     * @Route ("/books/{id}", name="book")
     * @param int $id
     * @return Response
     */
    public function book(int $id): Response
    {
        $book = $this->service->getBook($id);

        if (is_null($book)) {
            return new Response('Book not found with id : ' . $id, Response::HTTP_NOT_FOUND);
        }

        return $this->render('book/list.html.twig', [
            'books' => [$book]
        ]);
    }

    /**
     * @Route ("/authors/{slug}", name="author")
     * @param string $slug
     * @return Response
     */
    public function author(string $slug): Response
    {
        $books = $this->service->getBooks(['author' => $slug]);

        if (empty($books)) {
            return new Response('No books found for author : ' . $slug, Response::HTTP_NOT_FOUND);
        }

        return $this->render('book/list.html.twig', [
            'books' => $books
        ]);
    }

    /**
     * @Route ("/dates/{date}", name="date")
     * @param integer $date
     * @return Response
     */
    public function publishingDate(int $date): Response
    {
        $books = $this->service->getBooks(['publishing_date' => $date]);

        if (empty($books)) {
            return new Response('No books found published in : ' . $date, Response::HTTP_NOT_FOUND);
        }

        return $this->render('book/list.html.twig', [
            'books' => $books
        ]);
    }

    /**
     * @Route ("/categories/{slug}", name="category")
     * @param string $slug
     * @return Response
     */
    public function category(string $slug): Response
    {
        $books = $this->service->getBooks(['category' => $slug]);

        if (empty($books)) {
            return new Response('No books found for category : ' . $slug, Response::HTTP_NOT_FOUND);
        }

        return $this->render('book/list.html.twig', [
            'books' => $books
        ]);
    }

}
