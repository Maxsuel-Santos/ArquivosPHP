<?php
abstract class Animal {
    protected $peso;
    protected $idade;
    protected $membros;

    abstract public function locomover();          // Métodos abs somente em classe abs.

    abstract public function alimentar(); 

    abstract public function emitirSom();


    public function getPeso() {
        return $this->peso;
    } public function getIdade() {
        return $this->idade;
    } public function getMembros() {
        return $this->membros;
    }


    public function setPeso($peso) {
        $this->peso = $peso;
    } public function setIdade($idade) {
        $this->idade = $idade;
    } public function setMembros($membros) {
        $this->membros = $membros;
    }
}
