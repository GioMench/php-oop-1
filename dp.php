<?php

require_once __DIR__ . "./models/books.php";
require_once __DIR__ . "./models/films.php";
require_once __DIR__ . "./models/genre.php";

$productions = [

    $book_1 = new Books('b','Harry Potter', 10, 'inglese', new Genre('fantasy', 'magic')), 
    $film_2 = new Films('f','Inception', 8, 'italiano', new Genre('fantasy', 'scientific')),
    $book_2 = new Books('b', 'Legendborn', 8, 'inglese', new Genre('fantasy', 'romatinc')), 
    $film_3 = new Films('f','Life', 8, 'inglese', new Genre('fantasy', 'scientific')),
    $book_3 = new Books('b','Città di Ossa', 9, 'italiano', new Genre('fantasy', 'horror')),
    $film_1 = new Films('f','Donnie Darko', 7, 'inglese', new Genre('fantasy', 'drammatic')),
   
   
];