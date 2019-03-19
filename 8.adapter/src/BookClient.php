<?php

namespace App;

use App\Interfaces\BookInterface;

class BookClient
{
    protected $book;

    public function __construct(BookInterface $book)
    {
        $this->book = $book;
    }

    public function readBook()
    {
        $this->book->open();
        $this->book->turnPage();
    }

    /**
     * @param BookInterface $book
     */
    public function setBook(BookInterface $book): void
    {
        $this->book = $book;
    }
}