<?php

require_once 'Midia.php';
class Musica extends Midia {
    private $artista;
    private $album;
    private $genero;

    public function __construct($titulo, $duracao, $artista, $album, $genero) {
        parent::__construct($titulo, $duracao,);
        $this->artista = $artista;
        $this->album = $album;
        $this->genero = $genero;
    }

    public function tocar() {
        return "
        Tocando: {$this->titulo}<br>
        Artista: {$this->artista}<br>
        Álbum: {$this->album}<br>
        Gênero: {$this->genero}<br>
        Duração: {$this->duracao}";
    }
}