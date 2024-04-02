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
    /**cognomenazionalità
     * getGenre
     *
     * @return string
     */
    public function getGenre(){
        return $this->genre1 . ' / ' . $this->genre2;
    }
}

class Director{
    public $name;
    public $surname;
    public $nationality;
    
    /**
     * __construct
     *
     * @param  mixed $_name
     * @param  mixed $_surname
     * @param  mixed $_nationality
     */
    function __construct($_name, $_surname, $_nationality) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->nationality = $_nationality;
    }
    
    /**
     * getDirector
     *
     * @return string
     */
    public function getDirector(){
        return $this->name . ' ' . $this->surname .', ' . ' naz: ' . $this->nationality;
    }

}

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
                    Regista: ".$film->director->getDirector()." <br>
                    Genere: " .$film->genre->getGenre(). "
                </li>";
            }
        ?>
    </ul>
</body>
</html>