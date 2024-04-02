<?php

// definiamo la classe Movie
class Movie {
        // dichiariamo le variabili di istanza
        public $title;
        public $comingDate;
        public $director;
        public $genre;
    }

$film1 = new Movie();
// personalizziamo le proprietà
$film1->title = "La Teoria Del Tutto";
$film1->comingDate = "2014";
$film1->director = "James Marsh";
var_dump($film1);

$film2 = new Movie();
// personalizziamo le proprietà
$film2->title = "A Beautiful Mind";
$film2->comingDate = "2001";
$film2->director = "Ron Howard";
var_dump($film2);

$film3 = new Movie();
// personalizziamo le proprietà
$film3->title = "Rush";
$film3->comingDate = "2013";
$film3->director = "Ron Howard";
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