<?php

class Genre
{

    //public $type ;
    public function __construct(public string $type, public string $description)
    {
    }

    public function get_type()
    {
        return $this->type;
    }

    public function get_description()
    {
        return $this->description;
    }

}