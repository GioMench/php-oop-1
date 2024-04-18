<?php
require_once __DIR__ . "./models/books.php";
require_once __DIR__ . "./models/films.php";

$book_1 = new Books('Harry Potter', 10, 'inglese');
$book_2 = new Books('Legendborn', 8, 'inglese');
$book_3 = new Books('Città di Ossa', 9, 'italiano');

$film_1 = new Films('Donnie Darko', 7, 'inglese');
$film_2 = new Films('Inception', 8, 'italiano');
$film_3 = new Films('Life', 8, 'inglese');

//var_dump($book_1->get_title());
//var_dump($film_2->get_title());


include_once __DIR__ . '/layout/head.php';
?>



<body class="bg-secondary">

    <div class="container">

        <h1 class="text-center p-3 text-white">TOP 3 BOOKS AND FILMS OF THE MONTH</h1>

        <?php include_once __DIR__ .'/layout/mainBooks.php';?>
        <?php include_once __DIR__ .'/layout/mainFilms.php';?>

    </div>





    <?php include_once __DIR__ . '/layout/foo.php'; ?>
</body>

</html>