<?php
class Movie
{
    public $title;
    public $length;
    public $lenguage;

    public function __construct($title, $length, $lenguage)
    {
        $this->title = $title;
        $this->length = $length;
        $this->lenguage = $lenguage;
    }
}