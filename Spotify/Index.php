<?php

declare(strict_types=1);

require_once 'classes/Musica.php';
require_once 'classes/Podcast.php';
require_once 'classes/Shorts.php';
require_once 'classes/Playlist.php';

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

$playlist = new Playlist();

$playlist->adicionarMidia($musica);
$playlist->adicionarMidia($podcast);
$playlist->adicionarMidia($video);

$playlist->reproduzirTudo();
