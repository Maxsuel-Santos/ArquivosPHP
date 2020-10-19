<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    // Atributos 
    private $volume;
    private $ligado;
    private $tocando;

    // Métodos Especiais
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume() {
        return $this->volume;
    }
    private function getLigado() {
        return $this->ligado;
    }
    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }
    
    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }
    
    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    // Métodos que Contralador.php importou
    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function abrirMenu() {
        print("<p>-----MENU-----</p>");
        print("<br/>Está ligado? ". ($this->getLigado()?"Sim.":"Não."));
        print("<br/>Está tocando? ". ($this->getTocando()?"Sim.":"Não."));
        print("<br/>Volume: ". $this->getVolume());
        for ($i = 0; $i <= $this->getVolume(); $i+=10) {
            print(" |");
        }
        print("<br/>");
    }
    public function fecharMenu() {
        print("<br/>Fechar Menu...");
    }
    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            print("<p>ERRO: Não foi possível aumentar o volume! Ligue o dispositivo primeiro. </p>");
        }
    }
    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        } else {
            print("<p>ERRO: Não foi possível diminuir o volume! Ligue o dispositivo primeiro. </p>");
        }
    }
    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    public function play() {
        if ($this->getLigado() && ! ($this->getTocando())) {  // $this->getTocando(false))) {
            $this->setTocando(true);
        }
    }
    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}
