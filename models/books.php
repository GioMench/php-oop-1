<?php
require_once __DIR__ ."/genre.php";
class Books
{
    public $title;
    public $vote;
    public $lang;
    public $genre;
    public $type;

    public function __construct($type ,$title, $vote, $lang, $genre )
    {
        $this->title = $title;
        $this->vote = $vote;
        $this->lang = $lang;
        $this->genre = $genre;
        $this->type = $type;


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
    public function get_genre()
    {
        return $this->genre;
    }
    public function get_type(){
        return $this->type;
    }



    // methods
    public function best_book()
    {
        echo $this->title . ': è il più venduto questo mese!';
    }


}