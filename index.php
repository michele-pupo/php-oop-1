<?php

// definiamo la classe Movie
class Movie {
        // dichiariamo le variabili di istanza
        public $title;
        public $comingDate;
        public $director;
        public $genre;

        // funzione costruttore
        function __construct($_title, $_comingDate, $_director) {
            // gli attributi della classe
            $this->title = $_title;
            $this->comingDate = $_comingDate;
            $this->director = $_director;
        }
    }

$film1 = new Movie("La teoria del tutto", 2014, "James Marsh");

$film1->genre = "Romantico";
var_dump($film1);

$film2 = new Movie("A Beautiful Mind", 2001, "Ron Howard");

$film2->genre = "Thriller";
var_dump($film2);

$film3 = new Movie("Rush", 2013, "Ron Howard");

$film3->genre = "Sportivo";
var_dump($film3);

?>

<!DOCTYPE html>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    
</body>
</html>