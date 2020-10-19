<?php
require_once 'Animal.php';
class Peixe extends Animal {
    private $corEscama;


    public function locomover() {
        print("<p>NADANDO</p>");
    } public function alimentar() {
        print("<p>COMENDO SUBSTÂNCIAS</p>");
    } public function emitirSom(){
        print("<p>PEIXE NÃO FAZ SOM</p>");
    } public function soltarBolha() {
        print("<p>SOLTOU UM BOLHA</p>");
    }


    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}
