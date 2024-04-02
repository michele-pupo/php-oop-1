<?php

// definiamo la classe Movie
class Movie {
    // dichiariamo le variabili di istanza
    public $title;
    public $comingDate;
    public $director;
    public $genre;

    // funzione costruttore        
    /**
     * __construct
     *
     * @param  string $_title
     * @param  int $_comingDate
     * @param  string $_director
     */
    function __construct($_title, $_comingDate, Director $_director, Genre $_genre) {
        // gli attributi della classe
        $this->title = $_title;
        $this->comingDate = $_comingDate;
        $this->director = $_director;
        $this->genre = $_genre;
    }
}