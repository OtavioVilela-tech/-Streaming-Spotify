<?php

declare(strict_types=1);

require_once "Midia.php";

class Shorts extends Midia
{
    public function __construct(
        private string $criador,
        string $titulo,
        int $duracao
    ) {
        parent::__construct($titulo, $duracao);
    }

    public function reproduzir(): string
    {
        return "📱 Assistindo shorts: " . $this->getTitulo() .
               " - Criador: " . $this->criador;
    }
}