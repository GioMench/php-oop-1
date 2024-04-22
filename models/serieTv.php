<?php
class SerieTv extends Books
{

    public function __construct(public $type, public $title,public $vote,public $lang, public $genre, public $numberSeason)
    {
       parent::__construct($type, $title, $vote, $lang, $genre);
    }
    public function getSeason()
    {
        return $this->numberSeason;
    }
}