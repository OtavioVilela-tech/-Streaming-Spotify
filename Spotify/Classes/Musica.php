<?php

declare(strict_types=1);

require_once 'Midia.php';

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
        return "
        Tocando: {$this->getTitulo()} <br>
        Artista: {$this->artista} <br>
        Álbum: {$this->album} <br>
        Gênero: {$this->genero} <br>
        Duração: {$this->getDuracao()} min";
    }
}
