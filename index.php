<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>
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

        public function getfullMovie()
        {
            return $this->title .
                $this->length .
                $this->lenguage;
        }

        public function getHtml()
        {
            return "Movie: " . $this->title .
                "<br> Length: " . $this->length .
                "<br> Lenguage: " . $this->lenguage;
        }

    }

    // $movie = new Movie("Avatar", "125", "Eng");
    
    // echo $movie->getfullMovie();
    
    $movies = [new Movie("Avatar", "125", "Eng"), new Movie("The Lord Of the Rings", "230", "Eng"), new Movie("Tre uomini e una gamba", "90", "Ita")];

    foreach ($movies as $movie)
        $str = ""; {
        $str .= $movie->getfullMovie();
    }

    echo $movie->getHtml()
        ?>


</body>

</html>