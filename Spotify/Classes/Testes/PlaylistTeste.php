<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../classes/Musica.php';
require_once __DIR__ . '/../classes/Podcast.php';
require_once __DIR__ . '/../classes/Playlist.php';

class PlaylistTest extends TestCase
{
    public function testCalcularDuracao()
    {
        $playlist = new Playlist("Favoritas");

        $musica = new Musica(
            "The Beatles",
            "Abbey Road",
            "Rock",
            "Come Together",
            200
        );

        $podcast = new Podcast(
            "Mitico e Igão",
            "PodPah",
            300
        );

        $playlist->adicionar($musica);
        $playlist->adicionar($podcast);

        $this->assertEquals(
            500,
            $playlist->calcularDuracao()
        );
    }
}