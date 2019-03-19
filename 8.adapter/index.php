<?php

require "vendor/autoload.php";

use App\BookClient;
use App\TextBook;
use App\PdfBook;
use App\KindleAdapter;

$textBook = new TextBook();
$bookClient = new BookClient($textBook);
echo "Reading the normal textbook ...\n";
$bookClient->readBook();

echo "\nReading a pdf book through kindle adapter using the same client structure...\n";
$pdfBook = new PdfBook();
$bookClient->setBook(new KindleAdapter($pdfBook));
$bookClient->readBook();