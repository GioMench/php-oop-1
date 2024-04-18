<?php
class Books
{
    public $title;
    public $vote;
    public $lang;
    public $genre;

    public function __construct($title, $vote, $lang, $genre )
    {
        $this->title = $title;
        $this->vote = $vote;
        $this->lang = $lang;
        $this->genre = $genre;


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



    // methods
    public function best_book()
    {
        echo $this->title . ': è il più venduto questo mese!';
    }


}