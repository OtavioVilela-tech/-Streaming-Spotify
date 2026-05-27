<?php

declare(strict_types=1);

require_once 'Classes/Musica.php';
require_once 'Classes/Podcast.php';
require_once 'Classes/Shorts.php';
require_once 'Classes/Playlist.php';

$musica = new Musica(
    "Come Together",
    200,
    "The Beatles",
    "Abbey Road",
    "Rock"
);

$podcast = new Podcast(
    "PodPah",
    3600,
    "Mitico e Igão"
);

$video = new Shorts(
    "Tutorial PHP",
    60,
    "Dev Aprender"
);

$playlist = new Playlist("Favoritas");

$playlist->adicionar($musica);
$playlist->adicionar($podcast);
$playlist->adicionar($video);

$playlist->reproduzirTudo();
