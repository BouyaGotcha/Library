<?php

namespace App\Service;

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
     * @return array
     */
    public function getBooks(): array
    {
        return $this->bookRepository->findAll();
    }

}
