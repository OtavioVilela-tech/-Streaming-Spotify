<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../classes/Musica.php';

class MusicaTest extends TestCase
{
    public function testReproduzirMusica()
    {
        $musica = new Musica(
            "The Beatles",
            "Abbey Road",
            "Rock",
            "Come Together",
            259
        );

        $resultado = $musica->reproduzir();

        $this->assertStringContainsString(
            "Come Together",
            $resultado
        );

        $this->assertStringContainsString(
            "The Beatles",
            $resultado
        );
    }
}