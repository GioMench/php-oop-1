<?php
class SerieTv
{

    public $numberSeason;

    public function __construct($numberSeason)
    {
        $this->numberSeason = $numberSeason;
    }
    public function getSeason()
    {
        return $this->numberSeason;
    }
    public function setSeason($numberSeason)
    {
        $this->numberSeason = $numberSeason;
    }
}