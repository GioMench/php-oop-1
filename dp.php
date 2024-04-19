<?php

require_once __DIR__ . "./models/books.php";

require_once __DIR__ . "./models/genre.php";

$productions = [

    $book_1 = new Books('b', 'Harry Potter', 10, 'inglese', new Genre('fantasy', 'magic')),
    
    $book_2 = new Books('b', 'Legendborn', 8, 'inglese', new Genre('fantasy', 'romatinc')),
    
    $book_3 = new Books('b', 'Città di Ossa', 9, 'italiano', new Genre('fantasy', 'horror')),
    

];