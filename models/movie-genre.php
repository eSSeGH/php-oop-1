<?php

class MovieGenre {

    public string $movie_genre1;
    public string $movie_genre2;
    public string $movie_genre3;
    public string $movie_genre4;

    function __construct($_movie_genre1) {

        $this->movie_genre1 = $_movie_genre1;
    }

    function getAllGenres() {

        $all_genres = $this->movie_genre1;

        if (isset($this->movie_genre2)) {
            $all_genres .= ", $this->movie_genre2";
        } else if (isset($this->movie_genre3)) {
            $all_genres .= ", $this->movie_genre2, $this->movie_genre3";
        } else if (isset($this->movie_genre4)) {
            $all_genres .= ", $this->movie_genre2, $this->movie_genre3, $this->movie_genre4";
        } 

        return $all_genres;
    }

}
?>