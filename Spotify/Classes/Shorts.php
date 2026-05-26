<?php

declare(strict_types=1);

require_once 'Midia.php';

class Shorts extends Midia
{
    public function __construct(
        string $titulo,
        int $duracao,
        private string $criador
    ) {
        parent::__construct($titulo, $duracao);
    }

    public function reproduzir(): string
    {
        return
            "Shorts: {$this->getTitulo()}" . PHP_EOL .
            "Criador: {$this->criador}" . PHP_EOL .
            "Duração: {$this->getDuracao()} segundos";
    }
}
