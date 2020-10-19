<?php
require_once 'Animal.php';
class Mamifero extends Animal {
    protected $corPelo;

    public function locomover() {
        print("<p>CORRENDO</p>");
    } public function alimentar() {
        print("<p>MAMANDO</p>");
    } public function emitirSom(){
        print("<p>SOM DE MAMÍFERO</p>");
    }


    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}
