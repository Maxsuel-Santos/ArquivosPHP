<?php
require_once 'Animal.php';
class Reptil extends Animal {
    private $corEscama;


    public function locomover() {
        print("<p>RASTENJANDO</p>");
    } public function alimentar() {
        print("<p>COMENDO VEGETAIS</p>");
    } public function emitirSom(){
        print("<p>SOM DE RÉPTIL</p>");
    }


    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}
