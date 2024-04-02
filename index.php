<?php

require 'db.php';

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
                    Regista: ".$film->director?->getDirector()." <br>
                    Genere: " .$film->genre?->getGenre(). "
                </li>";
            }
        ?>
    </ul>
</body>
</html>