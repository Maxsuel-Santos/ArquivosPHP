<?php
require_once 'Pessoa.php'; 
class Aluno extends Pessoa {
    private $matricula;
    private $curso;
    
    public function PagarMensalidade() {
        print("<p>Mensalidade paga do aluno <strong>{$this->nome}</strong>.</br>R$ -620.00</p>");
    }


    public function getMatricula() {
        return $this->matricula;
    } public function getCurso() {
        return $this->curso;
    }


    public function setMatricula($ma) {
        $this->matricula = $ma;
    } public function setCurso($cu) {
        $this->curso = $cu;
    }
}
