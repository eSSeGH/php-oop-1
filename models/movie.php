<?php

require_once __DIR__."./movie-genre.php";

class Movie {

    public string $title;
    public string $language;
    public $film_genre;
    public string $plot;
    public int $year;
    public string $img;

    function __construct($_title, $_language, $_plot, $_year, MovieGenre $_film_genre, $_img) {

        $this->title = $_title;
        $this->language = $_language;
        $this->film_genre = $_film_genre;
        $this->plot = $_plot;
        $this->year = $_year;
        $this->img = $_img;
    }

    function getMovieAge() {

        if(!isset($this->year)) {
            return 'Errore: Anno di produzione mancante';
        }

        $cur_year = date('Y');

        return $cur_year - $this->year;
    }

    function getLang() {

        switch ($this->language) {
            case 'it_IT':
                return 'Italiano';
                break;
            case 'eng_US':
                return 'English(US)';
                break;
        }
    }
}
?>