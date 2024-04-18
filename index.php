<?php
class Books
{
    public $title;
    public $vote;
    public $lang;

    public function __construct($title, $vote, $lang)
    {
        $this->title = $title;
        $this->vote = $vote;
        $this->lang = $lang;

    }

    //getters
    public function get_title()
    {
        return $this->title;
    }

    public function get_vote()
    {
        return $this->vote;
    }

    public function get_lang()
    {
        return $this->lang;
    }


    // methods
    public function best_book()
    {
        echo $this->title . ': è il più venduto questo mese!';
    }


}

$book_1 = new Books('Harry Potter', 10, 'inglese');
$book_2 = new Books('Legendborn', 8, 'inglese');
$book_3 = new Books('Città di Ossa', 9, 'italiano');

var_dump($book_1->get_title());




?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<div class="cotainer">
    <div>
        <h2><?= $book_1->get_title() ?></h2>
        <div><?= $book_1->get_vote() ?></div>
        <div><?= $book_1->get_lang() ?></div>
        
    </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>