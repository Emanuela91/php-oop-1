<?php
class Movie
{
    public $title;
    public $length;
    public $lenguage;
    public array $movies;

    public function __construct($title, $length, $lenguage, array $movies)
    {
        $this->title = $title;
        $this->length = $length;
        $this->lenguage = $lenguage;
        $this->movies = $movies;
    }

    public function getfullMovie()
    {
        return $this->title .
            $this->length .
            $this->lenguage;
    }

    public function getEachMovie()
    {
        $str = "";
        foreach ($this->movies as $movie) {
            $str .= $movie->getfullMovie();
        }
    }
}


$movies = [new Movie("Avatar", "125", "Eng"), new Movie("The Lord Of the Rings", "230", "Eng"), new Movie("Tre uomini e una gamba", "90", "Ita")];