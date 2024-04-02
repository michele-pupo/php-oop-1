<?php

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