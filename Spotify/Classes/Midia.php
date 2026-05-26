<?php

declare(strict_types=1);

require_once "Reproduzivel.php";

abstract class Midia implements Reproduzivel
{
    public function __construct(
        private string $titulo,
        private int $duracao
    ) {}

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getDuracao(): int
    {
        return $this->duracao;
    }
}