<?php 
require_once 'Pessoa.php';
final class Professor extends Pessoa {    // Não pode ter filhos (estério).
    protected $aula;

    public function darAula() {
        $this->aula++;
        print("<p>O professor {$this->nome} já vai dar sua aula de 50 minutos sobre programação.</p>")
    }


    public function getAula() {
        return $this->aula;
    } 


    public function setAula($au) {
        $this->aula = $au;
    }
}
