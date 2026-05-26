<?php

declare(strict_types=1);

require_once 'Midia.php';

class Podcast extends Midia
{
    public function __construct(
        string $titulo,
        int $duracao,
        private string $host
    ) {
        parent::__construct($titulo, $duracao);
    }

    public function reproduzir(): string
    {
        return
            "Podcast: {$this->getTitulo()}" . PHP_EOL .
            "Host: {$this->host}" . PHP_EOL .
            "Duração: {$this->getDuracao()} min";
    }
}
