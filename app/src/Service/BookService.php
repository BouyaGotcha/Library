<?php

namespace App\Service;

use App\Entity\Book;
use App\Repository\BookRepository;

class BookService
{

    /** @var BookRepository */
    private $bookRepository;

    /**
     * @param BookRepository $bookRepository
     */
    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    /**
     * @param array $filters
     * @return array
     */
    public function getBooks(array $filters = []): array
    {
        return $this->bookRepository->findBy($filters);
    }

    /**
     * @param int $id
     * @return Book|null
     */
    public function getBook(int $id): ?Book
    {
        return $this->bookRepository->find($id);
    }

}
