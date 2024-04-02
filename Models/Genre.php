<?php

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
