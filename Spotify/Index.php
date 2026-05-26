<?php

declare(strict_types=1);

require_once 'classes/Musica.php';
require_once 'classes/Podcast.php';
require_once 'classes/Shorts.php';
require_once 'classes/Playlist.php';

$musica = new Musica(
    "Come Thogueder",
    200,
    "The Beatles"
);

$podcast = new Podcast(
    "PodPah",
    3600,
    "Mitico e Igão"
);

$video = new VideoCurto(
    "Tutorial PHP",
    60,
    "Dev Aprender"
);

$playlist = new Playlist();

$playlist->adicionarMidia($musica);
$playlist->adicionarMidia($podcast);
$playlist->adicionarMidia($video);

$playlist->reproduzirTudo();
