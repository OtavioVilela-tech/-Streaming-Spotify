<?php

declare(strict_types=1);

require_once "Midia.php";

class Podcast extends Midia
{
    public function __construct(
        private string $host,
        string $titulo,
        int $duracao
    ) {
        parent::__construct($titulo, $duracao);
    }

    public function reproduzir(): string
    {
        return " Reproduzindo podcast: " . $this->getTitulo() .
               " - Host: " . $this->host;
    }
}