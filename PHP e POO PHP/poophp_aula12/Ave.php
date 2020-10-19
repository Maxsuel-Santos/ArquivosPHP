<?php
require_once 'Animal.php';
class Ave extends Animal {
    private $corPena;


    public function locomover() {
        print("<p>VOANDO</p>");
    } public function alimentar() {
        print("<p>COMENDO FRUTAS</p>");
    } public function emitirSom(){
        print("<p>SOM DE AVE</p>");
    } public function fazerNinho() {
        print("<p>CONSTRUIU UM NINHO</p>");
    }


    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }
}
