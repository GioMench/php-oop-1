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