<?php

require_once __DIR__ . "./models/Books.php";

require_once __DIR__ . "./models/Genre.php";
require_once __DIR__ . "./models/Movies.php";
require_once __DIR__ . "./models/SerieTv.php";

$productions = [

    $book_1 = new Books('b', 'Harry Potter', 10, 'inglese', new Genre('fantasy', 'magic')),
    
    $book_2 = new Books('b', 'Legendborn', 8, 'inglese', new Genre('fantasy', 'romatinc')),
    
    $book_3 = new Books('b', 'Città di Ossa', 9, 'italiano', new Genre('fantasy', 'horror')),

    $book_4 = new SerieTv('s', 'The Vampire Daries',10, 'inglese', new Genre('fantasy', 'horror'), 10),

    $book_5 = new Movies('m', 'Avatr',8, 'italiano', new Genre('fantasy', 'adventur'), '50k', '190 min' )
    

];



