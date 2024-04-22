<?php
class Movies extends Books 
{
    public function __construct(public $type, public $title,public $vote,public $lang, public $genre, public $profits, public $time)
    {
       parent::__construct($type, $title, $vote, $lang, $genre);
    }
    public function getProfits()
    {
        return $this->profits;
    }
    public function getTime()
    {
        return $this->time;
    }
}