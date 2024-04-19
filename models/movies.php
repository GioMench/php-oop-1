<?php
class Movies
{
    public $profits;
    public $time;
    public function __construct($profits, $time)
    {
        $this->profits = $profits;
        $this->time = $time;
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