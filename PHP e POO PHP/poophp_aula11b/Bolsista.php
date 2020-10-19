<?php
require_once 'Aluno.php';
class Bolsista extends Aluno {
    private $bolsa;

    public function renovarBolsa() {
        print("<p>Bolsa Renovada!</p>");
    }
    
    // Método sobreposto 
    public function PagarMensalidade() {
        print("<p>Mensalidade paga do aluno <strong>{$this->nome}</strong>, que é bolsista com mensalidade à base de desconto.</p>");
    }


    public function getBolsa() {
        return $this->bolsa;
    }


    public function setBolsa($bo) {
        $this->bolsa = $bo;
    }
}
