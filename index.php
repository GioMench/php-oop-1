<?php
require_once __DIR__ . "./models/books.php";
require_once __DIR__ . "./models/films.php";
require_once __DIR__ . "./models/genre.php";



$book_1 = new Books('Harry Potter', 10, 'inglese', new Genre('fantasy', 'magic') );
$book_2 = new Books('Legendborn', 8, 'inglese',new Genre('fantasy', 'romatinc') );
$book_3 = new Books('Città di Ossa', 9, 'italiano', new Genre('fantasy','horror') );

$film_1 = new Films('Donnie Darko', 7, 'inglese', new Genre('fantasy','drammatic') );
$film_2 = new Films('Inception', 8, 'italiano', new Genre('fantasy','scientific') );
$film_3 = new Films('Life', 8, 'inglese', new Genre('fantasy','scientific') );

//var_dump($book_1->get_title());
//var_dump($film_2->get_title());

?>

<!doctype html>
    <?php include_once __DIR__ . '/layout/head.php'; ?>

<body class="bg-secondary">

    <div class="container">

        <h1 class="text-center p-3 text-white">TOP 3 BOOKS AND FILMS OF THE MONTH</h1>

        <?php include_once __DIR__ . '/layout/mainBooks.php'; ?>
        <?php include_once __DIR__ . '/layout/mainFilms.php'; ?>

    </div>

    <?php include_once __DIR__ . '/layout/foo.php'; ?>
</body>

</html>