<?php

declare(strict_types=1);

require_once 'Midia.php';

class Musica extends Midia
{
    public function __construct(
        string $titulo,
        int $duracao,
        private string $artista,
        private string $album,
        private string $genero
    ) {
        parent::__construct($titulo, $duracao);
    }

    public function reproduzir(): string
    {
        return
            "Tocando: {$this->getTitulo()}" . PHP_EOL .
            "Artista: {$this->artista}" . PHP_EOL .
            "Álbum: {$this->album}" . PHP_EOL .
            "Gênero: {$this->genero}" . PHP_EOL .
            "Duração: {$this->getDuracao()} min";
    }
}
