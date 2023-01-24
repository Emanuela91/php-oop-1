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

$movie1 = new Movie("Avatar", "125", "Eng");
var_dump($movie1);