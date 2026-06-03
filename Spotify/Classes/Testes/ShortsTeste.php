<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../classes/Shorts.php';

class ShortsTest extends TestCase
{
    public function testReproduzirShorts()
    {
        $shorts = new Shorts(
            "Dev Aprender",
            "Tutorial PHP",
            60
        );

        $resultado = $shorts->reproduzir();

        $this->assertStringContainsString(
            "Tutorial PHP",
            $resultado
        );

        $this->assertStringContainsString(
            "Dev Aprender",
            $resultado
        );
    }
}