<?php

require_once __DIR__."./models/movie.php";

$movie1 = new Movie(
    'La vita è bella',
    'it_IT',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, molestias. Nostrum beatae totam autem dolor, accusamus excepturi maiores ad reprehenderit?',
    1997,
    new MovieGenre('commedia'),
    './img/locandina-lavitaèbella.jpg' );

$movie1->film_genre->movie_genre2 = 'drammatico';

$movie2 = new Movie(
    'Tenet',
    'eng_US',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, molestias. Nostrum beatae totam autem dolor, accusamus excepturi maiores ad reprehenderit?',
    2020,
    new MovieGenre('azione'),
    './img/locandina-tenet.jpg' );

$movie2->film_genre->movie_genre2 = 'fantascienza';
$movie2->film_genre->movie_genre3 = 'spionaggio';
$movie2->film_genre->movie_genre4 = 'thriller';

var_dump($movie2->film_genre)
?>