<?php

require_once "./models/movie.php";

$movie1 = new Movie(
    'La vita è bella',
    'it_IT',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, molestias. Nostrum beatae totam autem dolor, accusamus excepturi maiores ad reprehenderit?',
    1997,
    'commedia',
    './img/locandina-lavitaèbella.jpg' );

$movie2 = new Movie(
    'Tenet',
    'eng_US',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, molestias. Nostrum beatae totam autem dolor, accusamus excepturi maiores ad reprehenderit?',
    2020,
    'azione',
    './img/locandina-tenet.jpg' );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <main>

        <header class="d-flex justify-content-center mb-5" style="background-color: rgba(0,0,0,0.95); height: 90px;">
            <h1 style="color: coral; line-height: 90px;">PHP OOP 1</h1>
        </header>

        <div class="container">
            <div class="row" style="gap: 30px;">

                <div class="my-col" style="width: calc(100%/4 - 90px/4);">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $movie1->img ?>" class="card-img-top" style="height: 382px; overflow: hidden;" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?php echo $movie1->title ?></h5>
                            <p class="card-text"><?php echo $movie1->plot ?></p>
                            <span class="card-text"><?php echo $movie1->getLang() ?></span>
                            <span class="card-text"><?php echo $movie1->film_genre ?></span>
                            <span class="card-text"><?php echo $movie1->year ?></span>
                            <span class="card-text">Il film è stato prodotto <?php echo $movie1->getMovieAge() ?> anni fa!</span>
                        </div>
                    </div>
                </div>

                <div class="my-col" style="width: calc(100%/4 - 90px/4);">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $movie2->img ?>" class="card-img-top" style="height: 382px; overflow: hidden;" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?php echo $movie2->title ?></h5>
                            <p class="card-text"><?php echo $movie2->plot ?></p>
                            <span class="card-text"><?php echo $movie2->getLang() ?></span>
                            <span class="card-text"><?php echo $movie2->film_genre ?></span>
                            <span class="card-text"><?php echo $movie2->year ?></span>
                            <span class="card-text">Il film è stato prodotto <?php echo $movie2->getMovieAge() ?> anni fa!</span>
                        </div>
                    </div>
                </div>
                <div class="my-col" style="width: calc(100%/4 - 90px/4);">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $movie1->img ?>" class="card-img-top" style="height: 382px; overflow: hidden;" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?php echo $movie1->title ?></h5>
                            <p class="card-text"><?php echo $movie1->plot ?></p>
                            <span class="card-text"><?php echo $movie1->getLang() ?></span>
                            <span class="card-text"><?php echo $movie1->film_genre ?></span>
                            <span class="card-text"><?php echo $movie1->year ?></span>
                            <span class="card-text">Il film è stato prodotto <?php echo $movie1->getMovieAge() ?> anni fa!</span>
                        </div>
                    </div>
                </div>

                <div class="my-col" style="width: calc(100%/4 - 90px/4);">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $movie2->img ?>" class="card-img-top" style="height: 382px; overflow: hidden;" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?php echo $movie2->title ?></h5>
                            <p class="card-text"><?php echo $movie2->plot ?></p>
                            <span class="card-text"><?php echo $movie2->getLang() ?></span>
                            <span class="card-text"><?php echo $movie2->film_genre ?></span>
                            <span class="card-text"><?php echo $movie2->year ?></span>
                            <span class="card-text">Il film è stato prodotto <?php echo $movie2->getMovieAge() ?> anni fa!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>