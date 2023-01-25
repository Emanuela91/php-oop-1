<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>
    <h1>MOVIES</h1>
    <?php

    // classe genere da aggiungere a movie 
    class Genre
    {
        public $name;
        public $description;

        public function __construct($name, $description)
        {
            $this->name = $name;
            $this->description = $description;
        }

        public function getHtml()
        {
            $name = $this->name;
            $description = $this->description;

            return $name . $description;
        }
    }

    // classe movie in cui si crea la struttura dei singoli film 
    class Movie
    {
        // dichiaro le variabili
        public $title;
        public $length;
        public $lenguage;

        // costruttore della classe 
        public function __construct($title, $length, $lenguage)
        {
            $this->title = $title;
            $this->length = $length;
            $this->lenguage = $lenguage;
        }

        // metodo per stampare a schermo le caratteristiche dei film 
        public function getHtml()
        {
            return "<h3>" . "Movie: " . $this->title . "</h3>" .
                "Length: " . $this->length . "min" .
                "<br> Lenguage: " . $this->lenguage . "<br>";
        }

    }

    // VERSIONE A VARIABILI
    // $movie1 = new Movie("Avatar", "125", "Eng");
    // $movie2 = new Movie("The Lord Of the Rings", "230", "Eng");
    // $movie3 = new Movie("Tre uomini e una gamba", "90", "Ita");
    
    // echo $movie1->getHtml();
    // echo "<br><br>";
    // echo $movie2->getHtml();
    // echo "<br><br>";
    // echo $movie3->getHtml();
    
    // VERSIONE AD ARRAY 
    $movies = [new Movie("Avatar", "125", "Eng"), new Movie("The Lord Of the Rings", "230", "Eng"), new Movie("Tre uomini e una gamba", "90", "Ita")];

    foreach ($movies as $movie) {
        echo $movie->getHtml();
    }

    ?>

</body>

</html>