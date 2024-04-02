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
        function __construct($_title, $_comingDate, $_director, Genre $_genre) {
            // gli attributi della classe
            $this->title = $_title;
            $this->comingDate = $_comingDate;
            $this->director = $_director;
            $this->genre = $_genre;
        }
    }

// creiamo una nuova classe che accetti più generi
class Genre {
    public $genre1;
    public $genre2;
    
    /**
     * __construct
     *
     * @param  string $_genre1
     * @param  string $_genre2
     */
    function __construct($_genre1, $_genre2) {
        $this->genre1 = $_genre1;
        $this->genre2 = $_genre2;
    }
    
    // restitutisce la stringa completa con i generi
    /**
     * getGenre
     *
     * @return string
     */
    public function getGenre(){
        return $this->genre1 . ' / ' . $this->genre2;
    }
}
// generi film 1
$film1Genre = new Genre("Romantico","Thriller");
// info film 1
$film1 = new Movie("La teoria del tutto", 2014, "James Marsh", $film1Genre);

// var_dump($film1);

// generi film 2
$film2Genre = new Genre("Trhiller","Guerra");
// info film 2
$film2 = new Movie("A Beautiful Mind", 2001, "Ron Howard", $film2Genre);

// var_dump($film2);

// generi film 3
$film3Genre = new Genre("Sportivo","Azione");
// info film 3
$film3 = new Movie("Rush", 2013, "Ron Howard", $film3Genre);

// var_dump($film3);


// creo un array di film
$films = [
    $film1,
    $film2,
    $film3
];

var_dump($films);

?>

<!DOCTYPE html>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <h1>Film</h1>
    <ul>
        <?php 
            foreach($films as $film){
                echo "
                <li> 
                    Titolo: ".$film->title." <br>
                    Anno: ".$film->comingDate." <br>
                    Regista: ".$film->director." <br>
                    Genere: " .$film->genre->getGenre(). "
                </li>";
            }
        ?>
    </ul>
</body>
</html>