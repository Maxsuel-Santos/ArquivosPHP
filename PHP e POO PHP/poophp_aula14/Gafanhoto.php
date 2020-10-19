<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa {
    private $login, $totAssistido;


    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->totAssistido = 0;
        $this->login = $login;
    }


    public function viuMaisUm() {
        $this->totAssistido++;
    }


    public function getLogin() {
        return $this->login;
    } public function getTotAssistido() {
        return $this->totAssistido;
    }


    public function setLogin($l) {
        $this->login = $l;
    } public function setTotAssistido($t) {
        $this->totAssistido = $t;
    }
}
