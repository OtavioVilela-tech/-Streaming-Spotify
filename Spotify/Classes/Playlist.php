<?php

declare(strict_types=1);

require_once 'Midia.php';

class Playlist
{
    private array $midias = [];

    public function __construct(
        private string $nome
    ) {}

    public function adicionar(Midia $midia): void
    {
        $this->midias[] = $midia;
    }

    public function reproduzirTudo(): void
    {
        echo "\n Playlist: {$this->nome}\n";
        echo "=============================\n";

        foreach ($this->midias as $midia) {
            echo $midia->reproduzir() . PHP_EOL;
        }

        echo "=============================\n";
        echo "Fim da playlist\n";
    }

    public function calcularDuracao(): int
    {
        $total = 0;

        foreach ($this->midias as $midia) {
            $total += $midia->getDuracao();
        }

        return $total;
    }
}
