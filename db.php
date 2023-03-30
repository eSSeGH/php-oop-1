<?php

require_once __DIR__."./models/movie.php";

$movie1 = new Movie(
    'La vita è bella',
    'it_IT',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, molestias. Nostrum beatae totam autem dolor, accusamus excepturi maiores ad reprehenderit?',
    1997,
    new MovieGenre(['commedia','drammatico']),
    './img/locandina-lavitaèbella.jpg' );

$movie2 = new Movie(
    'Tenet',
    'eng_US',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, molestias. Nostrum beatae totam autem dolor, accusamus excepturi maiores ad reprehenderit?',
    2020,
    new MovieGenre(['azione','spionaggio','thriller']),
    './img/locandina-tenet.jpg' );

?>