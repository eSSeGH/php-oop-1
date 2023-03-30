<?php

class MovieGenre {

    public $movie_genres = [];


    function __construct($_movie_genres) {

        $this->movie_genres = $_movie_genres;
    }

    function getAllGenres() {

        return join(', ', $this->movie_genres);
    
    }
}
?>