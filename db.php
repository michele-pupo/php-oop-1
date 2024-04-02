<?php

require './Models/movie.php';
require './Models/Genre.php';
require './Models/Director.php';

// generi film 1
$film1Genre = new Genre("Romantico","Thriller");
// regista film 1
$film1Director = new Director("James","Marsh","Inghilterra");
// info film 1
$film1 = new Movie("La teoria del tutto", 2014, $film1Director, $film1Genre);

// var_dump($film1);

// generi film 2
$film2Genre = new Genre("Trhiller","Guerra");
// regista film 2
$film2Director = new Director("Ron","Howard","U.S.A");
// info film 2
$film2 = new Movie("A Beautiful Mind", 2001, $film2Director, $film2Genre);

// var_dump($film2);

// generi film 3
$film3Genre = new Genre("Sportivo","Azione");
// regista film 3
$film3Director = new Director("Ron","Howard","U.S.A");
// info film 3
$film3 = new Movie("Rush", 2013, $film3Director, $film3Genre);

// var_dump($film3);


// creo un array di film
$films = [
    $film1,
    $film2,
    $film3
];

// var_dump($films);