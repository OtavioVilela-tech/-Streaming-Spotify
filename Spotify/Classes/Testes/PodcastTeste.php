<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../classes/Podcast.php';

class PodcastTest extends TestCase
{
    public function testReproduzirPodcast()
    {
        $podcast = new Podcast(
            "Mitico e Igão",
            "PodPah",
            3600
        );

        $resultado = $podcast->reproduzir();

        $this->assertStringContainsString(
            "PodPah",
            $resultado
        );

        $this->assertStringContainsString(
            "Mitico e Igão",
            $resultado
        );
    }
}